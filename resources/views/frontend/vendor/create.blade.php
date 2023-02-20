<!doctype html>
<html lang="en">

<head>
    @include('backend.layouts.partials.head')
</head>

<style>
    .trash{
        margin-top: 27px;
    }
    .textpo{
        font-family: Poppins, sans-serif !important;
    }
</style>

<body data-sidebar="dark">

    <!-- ========== Loader ========== -->
    <div class="loader d-flex justify-content-center">
        <img class="d-block my-auto" src="{{ asset('img/loader.gif') }}" width="250" height="auto" alt="">
    </div>
    <!-- ========== End Loader ========== -->

            <div class="page-content">
                <div class="container-fluid">

                    @yield('breadcumb')

                    <div class="row mt-2">
                        <div class="col-lg-12 col-xl-12 col-sm-12">
                            <div class="card card-primary" style="border-radius:18px;">
                                <div class="card-header text-center " style="border-radius:10px 10px 0px 0px;">
                                    <h3 class="card-title" style="font-size: 35px; !important"> <b> Tanda Terima </b></h4>
                                </div>
                                <form method="POST" action="{{ route('vendor.store') }}" id="formPO">
                                    @csrf
                                    <div class="card-body">

                                        {{-- @include('backend.components.form-message') --}}
                                        <div class="card-body">
                                            {{-- <h4 class="card-title text-center">{{$page_title}}</h4> --}}
                                            <div class="d-flex justify-content-between">
                                                <h6 class="my-auto"> 
                                                    <small class="text-danger">*</small>
                                                    <b> Tanggal Kirim Sesuai Dengan tanggal surat jalan </b>
                                                </h6>
                                                {{-- <div class="col-lg-2"> --}}
                                                <button type="button" class="btn btn-outline-primary" id="btn-add-document" onclick="addField()">
                                                    <i class="fas fa-plus-square" > <span style="font-family: Poppins, sans-serif !important;"> ADD PO</span> </i>
                                                </button>
                                                    {{-- <span class="btn btn-primary" onclick="checkPO()">check</span> --}}
                                                {{-- </div> --}}
                                            </div>
                                            <hr>
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <div class="table">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                {{-- @include('backend.components.flash-message') --}}
                                                            </div>
                                                        </div>

                                                        {{-- <div class="row">
                                                            <div class="col-lg-2">
                                                                <label for="">No PO</label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label for="">Tanggal PO</label>
                                                            </div>
                                                            
                                                            <div class="col-lg-2">
                                                                <label for="">No Invoice</label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label for="">Tanggal Kirim </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label for="">Amount</label>
                                                            </div>
                                                        </div> --}}
                                                        
                                                        <div id="stj">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label for="">No PO (PO-)</label>
                                                                    <input class="form-control @error('no_po') is-invalid @enderror" placeholder="No Po" type="text"name="no_po[]" id="ponum">

                                                                    @error('no_po')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label for="">Tanggal PO</label>
                                                                    <input class="form-control @error('tanggal_po') is-invalid @enderror" max="9999-12-31" placeholder="Tanggal Po" type="date" name="tanggal_po[]" id="po_date">

                                                                    @error('tanggal_po')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="col-lg-2">
                                                                    <label for="">No Invoice</label>
                                                                    <input class="form-control @error('no_invoice') is-invalid @enderror" placeholder="No Invoice" type="text" name="no_invoice[]" id="qty1">

                                                                    @error('no_invoice')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="col-lg-2">
                                                                    <label for="">Tanggal Kirim</label>
                                                                    <input class="form-control @error('tanggal_kirim') is-invalid @enderror" max="9999-12-31" placeholder="Tanggal Kirim" type="date" name="tanggal_kirim[]" id="qty1">

                                                                    @error('tanggal_kirim')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="col-lg-2">
                                                                    <label for="">Nominal (Rp)</label>
                                                                    <input class="form-control @error('amount') is-invalid @enderror" placeholder="Nominal (Rp)" type="text" name="amount[]" id="input" >

                                                                    @error('amount')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <hr> --}}
                                        <div class="card-body">

                                            {{-- @include('backend.components.form-message') --}}
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <label for="">Email<small class="text-danger">*(Wajib Isi)</small></label>
                                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <label for="">Name Vendor <small class="text-danger">*(Wajib Isi)</small></label>
                                                            <input
                                                                class="form-control @error('name_vendor') is-invalid @enderror"
                                                                type="name_vendor" name="name_vendor">

                                                            @error('name_vendor')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <label for="">Note <small>(Optional)</small></label>
                                                            <textarea name="description" id="" cols="30" rows="7"
                                                                class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                                {{-- <div class="col-lg-6">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="">Dibuat <small class="text-danger">*</small></label>
                                                            <input
                                                                class="form-control @error('dibuat') is-invalid @enderror"
                                                                type="dibuat" name="dibuat">

                                                            @error('dibuat')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="card-footer" style="border-radius:0px 0px 10px 10px;background-color:#fff;">
                                            {{-- <button id="b5">Sweet alert</button> --}}
                                            <button type="submit" class="btn btn-success btn-footer"
                                                onclick="save()">Submit</button>
                                            {{-- <a href="{{ route('backend.purchase_order.index') }}"
                                                class="btn btn-secondary btn-footer">Back</a> --}}
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    @section('script')
                    <script>
                        new AutoNumeric('#input', {
                            currencySymbol : '',
                            decimalCharacter : ',',
                            digitGroupSeparator : '.',
                        });

                        
                    </script>
                    <script>
                      
                        //    function calculateTotal()
                        //     {
                        //         var qty = $('#qty').val();
                        //         var harga = $('#harga').val();
                        //         var total = parseInt(qty * harga);
                        //         console.log(qty, harga);
                        //         // $('#total').val(total);
                        //         // console.log(total);
                        //         // $(total).val();


                        //     }
                            var nums = 1;
                        function addField() {
                            var rowCount = $('#stj .row').length;
                            $("#stj")
                                .append(
                                    $(''+ 
                                        '<div class="row style="border-bottom: 4px dotted blue;">  ' +
                                        '<div> <hr> </div> ' +
                                        '<div class="col-lg-2"> <label for="">No PO (PO-) '+ nums +'</label> <input class="form-control" placeholder="No Po" type="text" name="no_po[]" id="qty' + rowCount + '" > </div>' +
                                        '<div class="col-lg-2"> <label for="">Tanggal PO</label> <input class="form-control" max="9999-12-31" placeholder="Tanggal Po" type="date" name="tanggal_po[]" id="qty' + rowCount + '" > </div>' +
                                        '<div class="col-lg-2"> <label for="">No Invoice</label> <input class="form-control" placeholder="No Invoice" type="text" name="no_invoice[]" id="qty' + rowCount + '" > </div>' +
                                        '<div class="col-lg-2"> <label for="">Tanggal Kirim</label> <input class="form-control" max="9999-12-31" placeholder="Tanggal Kirim" type="date" name="tanggal_kirim[]" id="qty' + rowCount + '" ></div>' +
                                        '<div class="col-10 col-lg-2"> <label for="">Nominal (Rp) </label> <input class="form-control" placeholder="Nominal (Rp)" type="text" name="amount[]" id="input' + rowCount + '" > </div>' +
                                        '<div class="col-2 col-lg-2 trash"> <button type="button" class="btn btn-outline-danger btn-remove" onclick="confirmDelete(this, '+ nums++ +')"><i class="fa fa-trash"></i></button> </div>' +
                                        '<div class=""> <hr> </div>' +
                                        '</div>'
                                    )
                                )
                                new AutoNumeric('#input' + rowCount, {
                                    currencySymbol : '',
                                    decimalCharacter : ',',
                                    digitGroupSeparator : '.',
                                });
                        }

                        function confirmDelete(val,num)
                        {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "Do you want to delete thi PO(" + num + ")",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!',
                                
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    $(val).parent().parent().remove();
                                }
                                })
                        }

                        function save() {
                            val12.forEach(item => {
                                $(".select_part option[value='" + item + "']").removeAttr('disabled');
                            });

                            $('#formPO').submit();
                        }

                            $(":input").inputmask();
                            $("#amount").inputmask({"mask": "999.999.999,99"});

                    </script>
                    <script> 
                        $(window).ready(function() {
                        $("#formPO").on("keypress", function (event) {
                            var keyPressed = event.keyCode || event.which;
                            if (keyPressed === 13) {
                                event.preventDefault();
                                return false;
                            }
                        });
                        });
                  
                    </script> 

                    @endsection

                </div>
            </div>

            @include('backend.layouts.partials.footer')
    @include('backend.layouts.partials.foot')
</body>

</html>
