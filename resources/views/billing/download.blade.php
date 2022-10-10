
<!DOCTYPE html>
<html class="no-js" lang="en">

    <?php $Settings = DB::table('settings')->where('id','1')->get() ?>
    @foreach ($Settings as $set)
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>Print Receipt</title>
  <link rel="stylesheet" href="{{asset('receipts.app/assets/css/style.css')}}">
  <style>

     .additional{
        font-size:9px;
     }

     .cs-invoice_head {
        font-size:11px;
     }
     .details td{
        font-size:10px;
     }
     .force-reduce{
        font-size:12px;
     }
     .cs-container{
        /* border: 5px solid #000000; */
     }
     .bordering{
        border: 3px solid #666;
     }

  </style>
</head>

<body>
    @foreach ($Billing as $Billing)
    <?php $Students = DB::table('students')->where('id',$Billing->student)->get(); ?>
    @foreach ($Students as $user)

        <div class="cs-container">
            <div class="cs-invoice cs-style1">
            <div class="cs-invoice_in" id="download_section">
                <div class="cs-invoice_head cs-type1 cs-mb25">
                <div class="cs-invoice_left">
                    <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Receipt No:</b> #{{$Billing->reference}}</p>
                    <p class="cs-invoice_date cs-primary_color cs-m0"><b class="cs-primary_color">Date: </b>{{date('d-M-Y')}}</p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <div class="cs-logo cs-mb5"><img width="200" src="{{url('/')}}/uploads/logo/{{$set->logo}}" alt="Atlas"></div>
                </div>
                </div>

                <div class="cs-invoice_head cs-mb10 borderinsg">
                <div class="cs-invoice_left">
                    <b class="cs-primary_color">Invoice To:</b>
                    <p>
                    {{$user->name}}
                    {{-- {{$set->location}} --}}
                    <br>Nairobi<br>
                    Kenya
                    </p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <b class="cs-primary_color">Pay To:</b>
                    <p>
                        {{$set->name}} <br>
                        {{$set->location}} <br>Nairobi,Kenya<br>

                    {{$set->email}}
                    </p>
                </div>
                </div>
                <div class="cs-invoice_head cs-type1 cs-mb25 correct-print-margin"></div>

                <div class="cs-table cs-style1">
                <div class="cs-round_border bordering">
                    <div class="cs-table_responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Course</th>
                            <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">Description</th>

                            <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="details">
                            <td class="cs-width_3">{{$Billing->title}}</td>
                            <td class="cs-width_4">{{$Billing->description}}</td>
                            <td class="cs-width_2 cs-text_right">KES {{$Billing->amount}}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="cs-invoice_footer cs-border_top ">
                    <div class="cs-left_footer cs-mobile_hide">
                        {{-- <p class="cs-mb0"><b class="cs-primary_color">Additional Information:</b></p> --}}
                        {{-- <p class="cs-m0 additional">At check in you may need to present the credit card used for payment of this ticket At check in you may need to present the credit card used for payment of this ticket .</p> --}}
                    </div>
                    <div class="cs-right_footer">
                        <table>
                        <tbody>
                            <tr class="cs-border_left">
                            <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg force-reduce">Subtotal</td>
                            <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right force-reduce">KES {{$Billing->amount}}</td>
                            </tr>
                            <tr class="cs-border_left">
                            <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg force-reduce">Balance Due</td>
                            <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right force-reduce">KES {{$Billing->balance}}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="cs-invoice_footer">
                    <div class="cs-left_footer cs-mobile_hide"></div>
                    <div class="cs-right_footer">
                    <table>
                        <tbody>
                        <tr class="cs-border_none">
                            <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color force-reduce">Total Amount</td>
                            <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right force-reduce">KES {{$Billing->amount}}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>

                <div class="cs-invoice_head cs-type1 cs-mb25"></div>
                {{-- <br> --}}
                <div class="signature">
                    <h6>{{$set->name}}</h6>
                    <p>Confirmed and Approved By:</p>
                    <p><u>{{Auth::User()->name}}</u></p>
                </div>
                <center>
                <p class="cs-m0 additional text-center"><strong>Money once paid is neither refundable nor transferable</strong></p>
                </center>

                <div class="cs-invoice_head cs-type1 cs-mb25 correct-print-margin"></div>
                <div class="cs-note">
                <div class="cs-note_left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M256 56v120a32 32 0 0032 32h120M176 288h160M176 368h160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                </div>
                <div class="cs-note_right">
                    <p class="cs-mb0"><b class="cs-primary_color cs-bold">Note:</b></p>

                    <p class="cs-m0 additional">This receipt was generated on {{date('Y-M-d')}} at {{date('H:i:s')}} for the above listed bill(s), should you have issues with the information herein, Feel free to call us on <strong>{{$set->mobile}}</strong>, Or write us an email at <strong>{{$set->email}}</strong>, Or Visit us at <strong>{{$set->location}}</strong><br><br></p>

                    <center>Thank You For Choosing {{$set->name}}</center>
                </div>
                </div><!-- .cs-note -->
            </div>

            <div class="cs-invoice_head cs-type1 cs-mb25"></div>
            <div class="cs-invoice_btns cs-hide_print">
                <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
                <span>Print</span>
                </a>
                <button id="download_btn" class="cs-invoice_btn cs-color2">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
                <span>Download</span>
                </button>
                <a href="{{'/'}}" id="download_btn" class="cs-invoice_btn cs-color3">

                    <span>Home</span>
                </a>
            </div>
            </div>
        </div>
    @endforeach
    @endforeach
  <script src="{{asset('receipts.app/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('receipts.app/assets/js/jspdf.min.js')}}"></script>
  <script src="{{asset('receipts.app/assets/js/html2canvas.min.js')}}"></script>
  <script src="{{asset('receipts.app/assets/js/main.js')}}"></script>
</body>
@endforeach
</html>
