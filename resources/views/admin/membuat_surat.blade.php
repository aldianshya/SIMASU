{{-- resources/views/buat-surat.blade.php --}}
@extends('layout.app')

@section('main')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #19467c;


        }

        .form-card {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            color: #19467c;

        }

        label {
            font-weight: 500;
            color: #1F2937;
            /* abu gelap */
            font-size: 14px;
        }

        .form-control {
            background-color: #F9FAFB;
            border: 1px solid #E5E7EB;
            border-radius: 6px;
            font-size: 14px;
            padding: 10px;
            

        }

        .form-control:focus {
            border-color: #4C6EF5;
            box-shadow: 0 0 0 2px rgba(76, 110, 245, 0.2);
        }

        .btn-save {
            background-color: #4C6EF5;
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px 40px;
            border-radius: 8px;
            transition: background-color 0.2s ease;
        }

        .btn-save:hover {
            background-color: #3B5BDB;
        }
    </style>

  <div style="background: #F8FAFF;  padding: 20px;">
        <h3 class="mb-4 font-weight-bold" style="color: #19467c;">Buat Surat</h3>

        <div class="form-card">
            <h4 class="text-center mb-4 font-weight-bold" style="color: #19467c;">Buat Surat Tugas</h4>
            <form style="color: #19467c;">
                <div class="form-row" style="color: #19467c;">
                    <div class="form-group col-md-6">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama Penerima</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>

                    <div class="form-group col-md-6">
                        <label>NIP Penerima</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Pangkat/Gol Penerima</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Jabatan Penerima</label>
                        <input type="text" class="form-control" value="CEO">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal Surat Ditetapkan</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Jabatan Pemberi</label>
                        <input type="text" class="form-control" value="CEO">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama Pemberi</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Pangkat/Gol Penerima</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>
                    <div class="form-group col-md-6">
                        <label>NIP Pemberi</label>
                        <input type="text" class="form-control" placeholder="Lorem ipsum">
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
