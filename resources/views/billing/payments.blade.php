@extends('billing.master-invoice')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">




        <!-- Content area -->
        <div class="content">

            <!-- Invoice archive -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">Payments</h6>
                </div>

                <table class="table table-lg invoice-archive">
                    <thead>
                        <tr>
                            <th style="min-width:100px;">#</th>
                            <th>Period</th>
                            <th>Mode</th>
                            <th>Issued To</th>

                            <th>Payment date</th>
                            <th style="min-width:300px;">Instalments</th>
                            <th>Amount</th>

                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Billings as $Billing)
                        <?php
                            $RawDate = $Billing->created_at;
                            $FormatDate = strtotime($RawDate);
                            $Month = date('M',$FormatDate);
                            $Date = date('D',$FormatDate);
                            $Year = date('Y',$FormatDate);
                            $date = date('d',$FormatDate);
                            $Hour = date('h',$FormatDate);
                            $min = date('i',$FormatDate);
                            $Sec = date('s',$FormatDate);
                        ?>
                        <tr>
                            <td>#{{$Billing->reference}}</td>
                            <td>

                            </td>
                            <td>
                                @if($Billing->m_pesa == null or $Billing->m_pesa == "0")
                                  <strong>Cash</strong>
                                @else
                                <strong>M-PESA:</strong>
                                    <span class="d-block font-size-sm text-muted">
                                        {{$Billing->m_pesa}}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <h6 class="mb-0">
                                    <?php $Student = DB::table('students')->where('id',$Billing->student)->where('campus', Auth::User()->campus)->get();  ?>
                                    @foreach ($Student as $student)
                                        <a target="new" href="{{url('/')}}/billings/student/{{$student->id}}">
                                            {{$student->name}}
                                        </a>
                                        <br>
                                        <small>
                                        <?php
                                           $Cour = \App\Models\Course::find($Billing->course_id);
                                           echo $Cour->title;
                                        ?>
                                        </small>
                                    @endforeach

                                    <?php $Course = DB::table('courses')->where('id',$Billing->course_id)->get(); ?>
                                    @foreach ($Course as $course)
                                       {{-- <small><span class="d-block font-size-sm text-muted">{{$course->title}}</span></small> --}}
                                    @endforeach
                                    {{-- <span class="d-block font-size-sm text-muted">{{$Billing->description}}</span> --}}
                                </h6>
                            </td>



                            <td>
                                <strong><small>{{$Month}} {{$date}}, {{$Year}} {{$Hour}}:{{$min}}:{{$Sec}}</small></strong>
                            </td>
                            <td>
                                {{-- {{$Billing->status}} --}}
                                {{-- <br> --}}
                                @if($Billing->balance < 1)
                                  <span>
                                    <a href="{{url('/')}}/billings/my-statements/{{$Billing->student}}" class="btn btn-outline-success">
                                        <?php $Instalments = DB::table('billings')->where('group_id',$Billing->reference)->get(); $counter = count($Instalments); $total = $counter+1; echo $total; ?> Instalment(s)
                                    </a>
                                  </span>
                                  <?php $Student = DB::table('students')->where('id',$Billing->student)->get(); ?>



                                @else
                                  <span class="{{url('/')}}/billings/my-statements/{{$Billing->student}}">
                                    <?php
                                          $Instalments = DB::table('billings')->where('group_id',$Billing->original_payment)->get();
                                          $counter = count($Instalments);
                                          $total = $counter+1;
                                    ?>

                                    @if($counter == 1)
                                        <a href="{{url('/')}}/billings/my-payments/{{$Billing->original_payment}}" class="btn btn-outline-danger">
                                            <?php
                                                //  echo $total;
                                            ?>
                                            Instalment(s)
                                        </a>
                                    @else
                                        <a href="{{url('/')}}/billings/my-statements/{{$Billing->student}}" class="btn btn-outline-danger">
                                            <?php echo $total; ?> Instalment(s)
                                        </a>
                                    @endif
                                  </span>

                                @endif
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">KES {{$Billing->amount}}
                                    <span class="d-block font-size-sm text-muted font-weight-normal">
                                        @if($Billing->balance < 0)
                                             <span class="text-success">
                                                Balance KES {{$Billing->balance}}
                                            </span>
                                        @else
                                             Balance KES {{$Billing->balance}}
                                        @endif
                                        <br>
                                        @if($Billing->discount == null or $Billing->discount =="0")

                                        @else
                                           <span class="text-danger"><strong>Discount</strong> -{{$Billing->discount}}</span>
                                        @endif

                                        {{-- Agreed :{{$Billing->agreed_amount}} --}}
                                    </span>
                                </h6>
                            </td>

                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    @if(Auth::User()->role == "Super Admin")
                                      <a href="{{url('/')}}/billings/edit/{{$Billing->id}}" class="list-icons-item"  title="Edit"><i class="icon-database-edit2 mr-3 fa-2x"></i></a>

                                      <a title="Delete this payment" onclick="return confirm('Do you wish to delete this payment? You cannot undo this process')" href="{{url('/')}}/billings/delete-payment/{{$Billing->id}}" class="list-icons-item text-danger"  title="Edit"><i class="icon-trash-alt mr-3 fa-2x"></i></a>
                                    @endif
                                    <a href="{{url('/')}}/billings/download/{{$Billing->id}}" title="Download" class="list-icons-item text-success" ><i class="fas fa-download mr-3 fa-2x"></i></a>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /invoice archive -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        @include('billing.footer')
        <!-- /footer -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->
@endsection
