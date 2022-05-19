<form action="{{url('/')}}/billings/create-bill" method="POST" id="Enroll-Forms" enctype="multipart/form-data">
    {{csrf_field()}}
    <?php
        $Billingz = DB::table('billings')->orderBy('id','DESC')->first();

            if($Billingz == null){
            $newOrder = 1;
            }else{
                $order = 1;
                $Current = $Billingz->id;
                $newOrder = $order+$Current;

            }

    ?>

    <input type="hidden" name="group_id" value="{{$Billing->reference}}">
    <input type="hidden" name="original_payment" value="{{$Billing->original_payment}}">
    <div class="col-lg-12">
        <div class="form-group" data-select2-id="207">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Reference:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="reference"  placeholder="Computer Technology" value="AEC-0{{$newOrder}}" autocomplete="student-name" required>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Student:</label>
                <div class="col-lg-10">
                    <div class="form-group" data-select2-id="207">
                        <select name="user" class="form-control select-minimum select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                            <optgroup label="Students" data-select2-id="208">
                                <?php  $Studs = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                @foreach ($Studs as $studs)
                                    <option selected value="{{$studs->id}}" data-select2-id="681"> {{$studs->name}} </option>
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
                    <input type="number" class="form-control" name="amount" value="{{$Billing->balance}}" autocomplete="student-name" required>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Course:</label>
                <div class="col-lg-10">
                    <div class="form-group" data-select2-id="207">
                        <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                            <optgroup label="Students" data-select2-id="208">
                                <?php $Students = DB::table('courses')->where('id',$Billing->course_id)->get(); ?>
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
            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description" required>{{$Billing->description}}</textarea>
        </div>
    </div>
    <hr>
    <hr>
    <div class="form-group row">
        <label class="col-form-label col-lg-2">Note</label>
        <div class="col-lg-10">
            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="note" required>Thank you for choosing Atlas Educational Center</textarea>
        </div>
    </div>
    <hr>
    <div class="text-right">
        @if(Session::has('billing'))
        <a href="{{url('/')}}/billings/download/{{Session::get('billing')}}" class="btn btn-success">
            <span class="fas fa-print mr-3"></span> Print Receipt <i class="icon-paperplane ml-2"></i>
        </a>
        @else
        <button type="submit" class="btn btn-primary">
            <span class="fas fa-save mr-3"></span>  Save and Print <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
        </button>
        @endif
        <p id="Success" style="padding:10px" class="alert-success">Payment Has Been Recorded Successfully</p>
    </div>


</form>