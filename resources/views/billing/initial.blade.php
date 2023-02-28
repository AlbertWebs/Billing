<form action="{{url('/')}}/billings/create-bill" method="POST" id="Enroll-Forms" enctype="multipart/form-data">
    {{csrf_field()}}

    <?php
        $Billing = DB::table('billings')->where('campus' ,Auth::user()->campus)->orderBy('id','DESC')->first();

            if($Billing == null){
            $newOrder = 1;
            }else{
                $order = 1;
                $Current = $Billing->id;
                $newOrder = $order+$Current;

            }

    ?>

            <input type="hidden" name="group_id" name="">

            <?php $Campuses = DB::table('settings')->where('id',Auth::User()->campus)->get(); ?>
            @foreach ($Campuses as $item)
            <div class="col-lg-12">
                <div class="form-group" data-select2-id="207">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Reference:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" readonly name="reference"  placeholder="Computer Technology" value="{{$item->aka}}-0{{$newOrder}}" autocomplete="student-name" required>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Student:</label>
                        <div class="col-lg-10">
                            <div class="form-group" data-select2-id="207">
                                <select name="user" class="form-control select-minimum select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                    <optgroup label="Students" data-select2-id="208">
                                        @if(Session::has('user'))
                                        <?php $u = Session::get('user'); $Studs = DB::table('students')->where('email',$u)->get(); ?>
                                        @foreach ($Studs as $studs)
                                            <option selected value="{{$studs->id}}" data-select2-id="681"> {{$studs->name}} </option>
                                        @endforeach

                                        @endif
                                        <?php $Students = DB::table('students')->get(); ?>
                                        @foreach($Students as $Stude)
                                        <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->name}} </option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="col-lg-12">
                <div class="form-group" data-select2-id="207">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Amount:</label>
                        <div class="col-lg-10">
                            <?php
                                 $Wallet = DB::table('wallets')->where('student_id',$studs->id)->where('status','1')->sum('amount');

                            ?>
                            <input type="number" class="form-control" name="amount"  placeholder="10000" autocomplete="student-name" required>
                            @if(Session::has('user'))
                            <?php $u = Session::get('user'); $Studentz = DB::table('students')->where('email',$u)->get(); ?>
                            @foreach ($Studentz as $studentz)
                                    <?php
                                        $SimilarBilling = App\Models\Billing::where('student',$studentz->id)->where('status','open')->where('course_id',$studentz->course_id)->orderBy('id','DESC')->limit('1')->get();
                                    ?>
                                    @if($SimilarBilling->isEmpty())

                                    @else
                                        @foreach ($SimilarBilling as $sim)
                                        <small style="color:#ff0000"><strong>Your Balance is {{$sim->balance}}</strong></small>
                                        @endforeach
                                    @endif
                            @endforeach
                            @endif
                            {{-- @if($Wallet == "0")
                                <input type="number" class="form-control" name="amount"  placeholder="10000" autocomplete="student-name" required>
                            @else
                                <input type="hidden" name="clear_wallet" value="{{$studs->id}}">
                                <input type="number" readonly class="form-control" name="amount" value="{{$Wallet}}"  placeholder="10000" autocomplete="student-name" required>
                                <small style="color:#4CAF50"><strong>Funds available in students Wallet, Clear it first!</strong></small>
                            @endif --}}

                        </div>
                    </div>
                    @if(Session::has('user'))
                    <?php $u = Session::get('user'); $Studentz = DB::table('students')->where('email',$u)->get(); ?>
                      @foreach ($Studentz as $studentz)
                        <?php $collectionz = DB::table('courses')->where('id',$studentz->course_id)->get(); ?>
                        @foreach ($collectionz as $itemz)
                          <?php
                              $SimilarBilling = App\Models\Billing::where('student',$studentz->id)->where('status','open')->where('course_id',$studentz->course_id)->orderBy('id','DESC')->limit('1')->get();
                          ?>
                          @if($SimilarBilling->isEmpty())
                          {{-- <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Agreed Amount:</label>
                                <div class="col-lg-10">
                                    <input  onclick="return confirm('Do you wish to agree on a different amount from the base course amount?')" type="number" class="form-control" name="agreed_amount"  placeholder="10000" autocomplete="student-name">
                                    <small style="color:#bbbbbb"><strong>Set This Amount if the price is Different from the set base price</strong></small>
                                </div>
                            </div> --}}
                          @else
                          @foreach ($SimilarBilling as $sim)
                          @if($sim->agreed_amount == null OR $sim->agreed_amount == 0)
                                {{-- <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Agreed Amount:</label>
                                    <div class="col-lg-10">
                                        <input onclick="return confirm('Do you wish to agree on a different amount from the base course amount?')" type="number" readonlyss title="You cannot set Agreed Amount After the payments have already been made" class="form-control" name="agreed_amount" value="{{$sim->agreed_amount}}"  autocomplete="student-name">
                                        <small style="color:#bbbbbb">
                                            <strong>You cannot set Agreed Amount After the payments have already been made
                                                @if($sim->balance == "0")

                                                @else
                                                  <span style="color:#ff0000">Your Balance is {{$sim->balance}}</span>
                                                @endif
                                            </strong>
                                        </small>
                                        </div>
                                </div> --}}
                                @else
                                {{-- <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Agreed Amount:</label>
                                    <div class="col-lg-10">
                                        <input  onclick="return confirm('Do you wish to agree on a different amount from the base course amount?')" type="number" readonlys class="form-control" name="agreed_amount" value="{{$sim->agreed_amount}}"  placeholder="10000" autocomplete="student-name">
                                        <small style="color:#bbbbbb"><strong>This amount was agreed upon in the previous payment, You cannot changed the agreement
                                            @if($sim->balance == "0")

                                            @else
                                              <span style="color:#ff0000">Your Balance is {{$sim->balance}}</span>
                                            @endif
                                        </strong></small>
                                        </div>
                                </div> --}}
                                @endif
                          @endforeach

                          @endif

                        @endforeach
                        @endforeach
                        @endif


                </div>
            </div>
            <hr>
            {{-- <div class="col-lg-12">
                <div class="form-group" data-select2-id="207">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Discount:</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="discount"  placeholder="2000" autocomplete="student-name">
                        </div>
                    </div>
                </div>
            </div>
            <hr> --}}
            {{-- <div class="col-lg-12">
                <div class="form-group" data-select2-id="207">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Balance:</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="temp_balance" value="0.00" placeholder="2000" autocomplete="student-name">
                        </div>
                    </div>
                </div>
            </div>
            <hr> --}}


            <input type="hidden" name="billType" value="0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Course:</label>
                        <div class="col-lg-10">
                            <div class="form-group" data-select2-id="207">
                                <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                    <optgroup label="Courses" data-select2-id="208">
                                        @if(Session::has('user'))
                                        <?php $u = Session::get('user'); $Studs = DB::table('students')->where('email',$u)->get(); ?>
                                        @foreach ($Studs as $studs)
                                            <?php $collection = DB::table('courses')->where('id',$studs->course_id)->get(); ?>
                                            @foreach ($collection as $item)
                                              <option selected value="{{$item->id}}" data-select2-id="681"> {{$item->title}} </option>
                                            @endforeach
                                        @endforeach

                                        @endif

                                        <?php $Students = DB::table('courses')->where('campus' ,Auth::user()->campus)->get(); ?>
                                        @foreach($Students as $Stude)
                                        <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->title}} - {{$Stude->price}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

            <hr>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Description</label>
                <div class="col-lg-10">
                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description" required>Fee Payment</textarea>
                </div>
            </div>
            <hr>
            <hr>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Note</label>
                <div class="col-lg-10">
                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="note" required>Thank you for choosing Global Technical Training College</textarea>
                </div>
            </div>
            <hr>


            <div class="form-group row">
                <label class="col-form-label col-lg-2">Send Confirmation SMS</label>
                <div class="col-lg-10">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" name="sms" class="custom-control-input" id="cc_ls_c" checked="">
                        <label class="custom-control-label" for="cc_ls_c"></label>
                    </div>
                </div>
            </div>
            <hr>



    <div class="text-right">
        @if(Session::has('billing'))
        <a href="{{url('/')}}/billings/download/{{Session::get('billing')}}" class="btn btn-success">
            <span class="fas fa-print mr-3"></span> Print Receipt <i class="icon-paperplane ml-2"></i>
        </a>
        @else

                <button onclick="return confirm('You cannot undo the process')" type="submit" class="btn btn-primary">
                    <span class="fas fa-save mr-3"></span>  Save and Print <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                </button>

        @endif
        <p id="Success" style="padding:10px" class="alert-success">Payment Has Been Recorded Successfully</p>
    </div>



</form>
