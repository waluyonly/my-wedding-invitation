@extends('layouts.app')

@section('title', 'Undangan')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Daftar Undangan</h4>
                    </div>
                    @if (auth()->user()->role == 'Admin')
                        <a href="{{ route('undangan.create') }}" class="btn btn-primary">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z"
                                    fill="currentColor"></path>
                            </svg>
                            Import Data
                        </a>
                    @endif
                </div>
                <div class="card-body px-0">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12">
                                <input id="search" class="form-control" type="text" placeholder="Cari....">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="user-list-table" class="table table-striped" role="grid" data-bs-toggle="data-table">
                            <thead>
                                <tr class="ligth">
                                    <th class="text-center">Share</th>
                                    <th>Name</th>
                                    <th class="text-center">URL</th>
                                    <th class="text-center">Pengundang</th>
                                    <th style="min-width: 100px">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (@$data->count() > 0)
                                    @foreach (@$data as $r)
                                        <tr class="items" data-item="{{ @$r->nama_lengkap }}">
                                            <td class="text-center">
                                                <span
                                                    class="btn btn-sm btn-soft-secondary mb-1 me-3 btn-copy copy{{ @$r->id }}"
                                                    data-clipboard-target="#copy{{ @$r->id }}">Copy URL</span><br>
                                                <span
                                                    class="btn btn-sm btn-soft-primary mb-1 me-3 btn-copy-caption caption{{ @$r->id }}"
                                                    data-id="{{ @$r->id }}">Copy URL +
                                                    Caption</span>
                                                <input type="hidden" id="caption{{ @$r->id }}"
                                                    value="{{ env('APP_URL') . '?undangan=' . @$r->nama_lengkap }}

Bismillahirrahmanirrohim…
Assalamualaikum warrahmatullahi wabarrakatuh

Segala puji bagi Allah Subnallahu wata’ala yang telah menciptkan manusia saling berpasang-pasangan, dengan memohon rahmat dan ridho-Nya, kami bermaksud mengundang saudara/i untuk hadir dan memberikan restu pada pernikahan kami.

Hari & Tanggal: Sabtu, 10 Agustus 2024
Waktu : Akad (08.00 s/d 10.00) dan Resepsi (10.00 s/d 14.00)
Lokasi : Gedung Madinatul Hujjaj Asrama Haji
Jl. Soekarno - Hatta No.36, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung

Berikut link Undangan Kami, untuk info lengkap acara bisa kunjungi :

Merupakan suatu kebahagiaan bagi kami apabila Saudara/i berkenan hadir untuk memberikan doa dan restu kepada kedua mempelai.

Doa keberkahan bagi pengantin pria dan wanita
بَارَكَ اللهُ لَكَ وَبَارَكَ عَلَيْكَ وَجَمَعَ بَيْنَكُمَا فِي خَيْرٍ

“Semoga Allah memberkahimu di waktu bahagia dan memberkahimu di waktu susah, serta semoga Allah mempersatukan kalian berdua dalam kebaikan”
(HR. Abu Dawud no. 2130)
Jazakumullahu khairan katsiran
Wassalamualaikum Warahmatullahi Wabarakatuh">
                                                </input>
                                            </td>
                                            <td>{{ @$r->nama_lengkap }}</td>
                                            <td class="text-center" id="copy{{ @$r->id }}">
                                                {{ env('APP_URL') . '?undangan=' . @$r->nama_lengkap }}</td>
                                            <td class="text-center">
                                                <span class="badge bg-primary">{{ @$r->user->name }}</span>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" data-original-title="Edit"
                                                        href="#">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete" href="#">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                stroke="currentColor">
                                                                <path
                                                                    d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center text-warning">
                                            Belum ada data!
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-copy').on('click', function() {
                var id = $(this).data('id');
                $(this).removeClass('btn-soft-primary').addClass('btn-soft-success text-success');
                $(this).html('Copied');

            });

            var clipboard = new ClipboardJS('.btn-copy');
            clipboard.on('success', function(e) {
                e.clearSelection();
            });

            $('.btn-copy-caption').on('click', function() {
                var id = $(this).data('id');
                var caption = new ClipboardJS('.btn-copy-caption', {
                    text: function() {
                        return $('#caption' + id).val();
                    }
                });
                caption.on('success', function(e) {
                    $('.caption' + id).removeClass('btn-soft-secondary').addClass(
                        'btn-soft-success text-success');
                    $('.caption' + id).html('Copied');
                    e.clearSelection();
                });
            });



            $("#search").on("keyup", function() {
                search();
            });

            function search() {
                var search = $("#search").val().trim().toLowerCase();
                $(".items").show().filter(function() {
                    return $(this).data("item").toLowerCase().indexOf(search) < 0;
                }).hide();
            }
        });
    </script>
@endpush
