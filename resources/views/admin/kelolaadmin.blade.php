@extends('layout.admin.mainutama')

@section('body')
    <!-- navbar -->

    <div class="container mb-5" style="margin-top:60px">

        <div class="row">

            <div class="col-md-6">
                <h5 style="font-size: 28px; font-weight: 700;">Kelola Admin</h5>
            </div>
            <div class="col-md-6">
                <form>
                    <a href="{{ url('/kelolaadmin/create ') }}" type="button" class="btn text-white mt-2 mb-4 "
                        style="background-color: #ff0000;">
                        + Tambahkan Admin
                    </a>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            {{-- <form>
                <a href="{{ url('/kelolaadmin/create ') }}" type="button" class="btn btn-primary mt-2 mb-4 "
                    style="background-color: #275062;">
                    + Tambahkan Admin
                </a>
            </form> --}}

            <table class="table p-3 ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->email }}</td>
                            <td value="">{{ $item->is_admin == '1' ? 'admin' : 'user' }}</td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach


                </tbody>
            </table>

            <div class="" data-aos="fade-up"> {{ $users->links() }}</div>

        </div>
    </div>
@endsection
