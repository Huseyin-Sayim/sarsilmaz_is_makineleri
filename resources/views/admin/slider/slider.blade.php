@extends("admin.layout.app")

@section("content")
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h6 class="mb-0">Blog</h6>
            <a href="{{ route("slider.create") }}" class="btn btn-primary float-end">Yeni Slider Ekle</a>
        </div>
        <table class="table media-library">
            <thead>
            <tr>
                <th>#</th>
                <th>Fotoğraf</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>Url</th>
                <th></th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        <a href="{{ asset($item->media_url) }}" data-bs-popup="lightbox">
                            <img src="{{ asset($item->media_url) }}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td>{{ $item->slider_title }}</td>
                    <td>{{ substr($item->slider_description, 0, 60) }}</td>
                    <td>{{ $item->slider_button }}</td>
                    <td></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('slider.edit', [$item->id]) }}" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Düzenle
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route("slider.delete", [$item->id]) }}" class="dropdown-item delete">
                                        <i class="ph-trash me-2"></i>
                                        Sil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- /media library -->

    <!-- Modal -->
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bu ögeyi silmek istediğinize emin misiniz ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Hayır</button>
                    <button type="button" class="btn btn-primary" id="confirm">Evet</button>
                    <!-- <a href="" class="btn btn-danger" id="confirm"></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->

    <!-- <========== This section will be edit again later =============> -->

    @if(\Illuminate\Support\Facades\Session::has("add_slider"))
        @if(\Illuminate\Support\Facades\Session::get("add_slider") == "success")
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Başarıyla eklendi",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("add_slider");
            @endphp
        @else
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "Error",
                    title: "Ekleme Başarısız",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("add_slider");
            @endphp
        @endif
    @endif

    @if(\Illuminate\Support\Facades\Session::has("update_slider"))
        @if(\Illuminate\Support\Facades\Session::get("update_slider") == "success")
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Başarıyla Güncellendi",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("update_slider");
            @endphp
        @else
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Güncelleme Hatası",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("update_slider");
            @endphp
        @endif
    @endif

    @if(\Illuminate\Support\Facades\Session::has("delete_slider"))
        @if(\Illuminate\Support\Facades\Session::get("delete_slider") == 'success')
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Başarıyla Silindi",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("delete_slider");
            @endphp
        @else
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Beklenmedik bir hata oluştu",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            @php
                \Illuminate\Support\Facades\Session::remove("delete_slider");
            @endphp
        @endif
    @endif

    <!-- <=======================================================> -->

    <!-- Modal Script Codes -->
    <script>
        $('.delete').click((e) => {
            e.preventDefault();
            $('.modal').show();
            let element = e.target.getAttribute('href');
            $('#confirm').click(() => {
                window.location.href = element;
            });
            $('#close').click(() => {
                $('.modal').hide();
            })
        });
    </script>
    <!-- /Modal Script Codes -->

    </div>
@endsection
