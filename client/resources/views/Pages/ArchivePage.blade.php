@extends('Layout.app')
@section('title', "Home")


@section('content')
    <div class="section-container mt-2">
        <div class="Title pt-2 pb-2 border-bottom border-dark">
            <h1 class="m-0">আর্কাইভ </h1>
        </div>

        <div class="archiveFilter mt-3 mb-3">
            <div class="row">
                <div class="mb-3 col-6 col-sm-6 col-md-4 col-lg-3">
                    <input type="text" onfocusout="(this.type='text')" onfocus="(this.type = 'date')" class="form-control"  placeholder="তারিখ থেকে">
                </div>
                <div class="mb-3 col-6 col-sm-6 col-md-4 col-lg-3">
                    <input onfocusout="(this.type='text')" onfocus="(this.type = 'date')" type="text" class="form-control"  placeholder="তারিখ পর্যন্ত">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected>ক্যটাগরি</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <input type="text" class="form-control" placeholder="অনুসন্ধান করুন">
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected>বিভাগ</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected>জেলা</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-6 mb-3 col-sm-6 col-md-4 col-lg-3">
                    <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected>উপজেলা</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-6 mb-3 col-sm-6 col-md-4 col-lg-3">
                    <input type="button" class="btn btn-secondary w-100" value="খুজুন">
                </div>
            </div>



        </div>

        <div id="archiveCardContent">
            <div class="row">
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="card border-0 pt-0 pb-0 link">
                        <img src="https://assets.dhakapost.com/media/imgAll/BG/2022February/mahesh-babu-1-20220319152502.jpg?width=330&height=175" class="card-img"></img>
                        <div class="card-body  plr-0">
                            <h5 class="border-bottom pb-2">মহেশ বাবুর সিনেমায় মেয়ে সিতারা, এক ঝলকে উঠল ঝড়! </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="loadMore text-center mt-4">
                <button class="btn btn-outline-danger">আরও দেখুন</button>
            </div>
        </div>
    </div>
@endsection
