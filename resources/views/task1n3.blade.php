<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    {{-- task 1 & task --}}
    <section style="background-color: rgb(220, 246, 255)">
        <div class="container-fluid p-5 pb-2">
            <div class="row ps-2">
                <div class="col-12 d-flex justify-content-between">
                    <h1 class="fw-bold">Our Top Products</h1>
                    <div class="d-flex gap-4 flex-column flex-sm-row">
                        <button class="btn rounded-circle btn-outline-info border-2" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="aspect-ratio: 1/1;">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="btn rounded-circle btn-outline-info border-2" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="aspect-ratio: 1/1;">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner mb-3">

                            <div class="carousel-item active">
                                <div class="row align-items-stretch">
                                    @foreach($product as $prod)
                                        <div class="col-12 col-md-6 col-lg-3 flex-grow-1 mt-2">
                                            <div class="card h-100 mx-auto" style="width: 18rem;">
                                                <img src="https://cdn.chemtradeasia.com/{{$prod->productimage}}"
                                                    class="card-img-top" alt="..." style="aspect-ratio: 1/1">
                                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                                    <h5 class="card-title fw-bold">{{ $prod->productLang->productname }}
                                                    </h5>
                                                    <div>
                                                        <p class="mb-0">Cas Number : {{ $prod->productLang->cas_number }}
                                                        </p>
                                                        <p class="mb-0">HS Code : {{ $prod->productLang->hs_code }}</p>
                                                    </div>
                                                    <button data-prod="{{ $prod->id }}" role="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $prod->id }}"
                                                        class="btn btn-outline-info w-100 rounded-pill fw-bold border-2 mt-auto"
                                                        onclick="changeValue({{ $prod->id }})">Inquire Now</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="exampleModal{{ $prod->id }}" tabindex="-1"
                                            aria-labelledby="exampleModal{{ $prod->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div
                                                            class="d-flex flex-column justify-content-center text-center align-items-center p-4">
                                                            <h1 class="fw-bold">Welcome Back!</h1>
                                                            <p>Login to start sending quotations request from <span
                                                                    id="data">{{ $prod->productLang->productname }}</span>!</p>
                                                            @php
                                                                $signins = [
                                                                    'Google',
                                                                    'Microsoft',
                                                                    'Apple',
                                                                    'Linkedin',
                                                                    'Facebook'
                                                                ]
                                                            @endphp
                                                            <div class="d-flex align-items-center gap-3 flex-column w-100">
                                                                @foreach($signins as $title)
                                                                    <a href="#"
                                                                        class="btn btn-outline-info w-50 border-2 fw-bold rounded-pill flex-grow-1"><i
                                                                            class="me-3 bi bi-{{ strtolower($title) }}"></i>Sign
                                                                        in with {{ $title }}</a>
                                                                @endforeach
                                                            </div>
                                                            <p class="mt-3 text-secondary">Don't have an account? <a
                                                                    href="#">Sign Up here.</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1">
                        _</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    {{--
    <script>
        const change = document.getElementById('data');

        function changeValue(id) {
            document.getElementById('data').value = id;
        }
    </script> --}}
</body>

</html>