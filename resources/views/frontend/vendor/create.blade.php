<!doctype html>
<html lang="en">

<head>
    @include('backend.layouts.partials.head')
</head>

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
                                    <h4 class="card-title">Tanda Terima</h4>
                                </div>
                                <form method="POST" action="{{ route('vendor.store') }}" id="formPO">
                                    @csrf
                                    <div class="card-body">

                                        @include('backend.components.form-message')
                                        <div class="card-body">
                                            {{-- <h4 class="card-title text-center">{{$page_title}}</h4> --}}
                                            <h6> <small class="text-danger">*</small><b> Tanggal Kirim Sesuai Dengan
                                                    tanggal surat jalan </b></h6>
                                            <hr>
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                @include('backend.components.flash-message')
                                                            </div>
                                                        </div>
                                                        <table class="table table-hover" id="contactTable">
                                                            <thead>
                                                                <tr>
                                                                    {{-- <th>No Po</th> --}}
                                                                    <th>No Po</th>
                                                                    <th>Tanggal Po</th>
                                                                    <th>No Inv</th>
                                                                    <th>Tanggal Kirim</th>
                                                                    {{-- <th>Status</th> --}}
                                                                    {{-- <th>Description</th> --}}
                                                                    <th>ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <p><b>PO-</b></p>
                                                                            </div>
                                                                            <div class="col-lg-10">
                                                                                <input
                                                                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                                                    placeholder="No Po" type="text"
                                                                                    name="no_po[]" id="ponum">
    
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input
                                                                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                                            placeholder="Tanggal Po" type="date"
                                                                            name="tanggal_po[]" id="po_date">
                                                                    </td>
                                                                    <td>
                                                                        <input
                                                                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                                            placeholder="No Invoice" type="text"
                                                                            name="no_invoice[]" id="qty1">
                                                                    </td>
                                                                    <td>
                                                                        <input
                                                                            class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                                            placeholder="Tanggal Kirim" type="date"
                                                                            name="tanggal_kirim[]" id="qty1">
                                                                    </td>

                                                                    <td>
                                                                        <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" placeholder="Amount" type="text" name="amount[]" id="amount" >
                                                                    </td>
                                                                    {{-- <td>
                                                                            <select class="form-select" id="">pending
                            
                                                                                <option value="">Pending</option>
                                                                            </select>
                                                                        </td> --}}
                                                                    {{-- <td>
                                                                            <textarea name="description" id="" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                                                    @error('description')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    <td> --}}
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-outline-success"
                                                                            id="btn-add-document" onclick="addField()">
                                                                            <i class="fas fa-plus-square"></i>
                                                                        </button>
                                                                        {{-- <span class="btn btn-primary" onclick="checkPO()">check</span> --}}
                                                                    <td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-body">

                                            @include('backend.components.form-message')
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <label for="">Email<small class="text-danger">*(Wajib Isi)</small></label>
                                                            <input
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                type="email" name="email">

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
                        var qty = $('#qty').val();
                        var harga = $('#harga').val();
                        var total = parseInt(qty * harga);
                        console.log(qty, harga);
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

                        function addField() {
                            var rowCount = $('#contactTable tr').length;
                            $("#contactTable").find('tbody')
                                .append(
                                    $('<tr>' +
                                        '<td><div class="row"><div class="col-lg-2"><p><b>PO-</b></p></div><div class="col-lg-10"><input class="form-control" placeholder="No Po" type="text" name="no_po[]" id="qty' + rowCount + '" onkeyup="calculatePrice(' + rowCount + ')"></div></div></td>' +
                                        '<td><input class="form-control" placeholder="Tanggal Po" type="date" name="tanggal_po[]" id="qty' + rowCount + '" onkeyup="calculatePrice(' + rowCount + ')"></td>' +
                                        '<td><input class="form-control" placeholder="No Invoice" type="text" name="no_invoice[]" id="qty' + rowCount + '" onkeyup="calculatePrice(' + rowCount + ')"></td>' +
                                        '<td><input class="form-control" placeholder="Tanggal Kirim" type="date" name="tanggal_kirim[]" id="qty' + rowCount + '" onkeyup="calculatePrice(' + rowCount + ')"></td>' +
                                        '<td><input class="form-control" placeholder="Amount" type="text" name="amount[]" id="amount' + rowCount + '" onkeyup="calculatePrice(' + rowCount + ')"></td>' +
                                        '<td style="max-width: 6% !important"><button type="button" class="btn btn-outline-danger btn-remove" onclick="$(this).parent().parent().remove();changeOptionValue();"><i class="fa fa-minus"></i></button></td>' +
                                        '</tr>'
                                    )
                                )
                            // changeOptionValue();
                $("#amount"+rowCount).inputmask({"mask": "9.999.999.999,99"});

                        }

                        function save() {
                            val12.forEach(item => {
                                $(".select_part option[value='" + item + "']").removeAttr('disabled');
                            });

                            $('#formPO').submit();
                        }

                        function totalPo(number) {
                            let qty = $('#qty').val();
                            let harga = $('#harga').val();
                            $('#total').val(harga * Number(qty));

                        }
                            $(":input").inputmask();
                            $("#amount").inputmask({"mask": "9.999.999.999,99"});

                    </script>

                    @endsection

                </div>
            </div>

            @include('backend.layouts.partials.footer')
    @include('backend.layouts.partials.foot')
</body>

</html>
