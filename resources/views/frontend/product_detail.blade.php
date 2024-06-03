
@extends('layouts.site')
@section('title','Detail')
@section('content')
<div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <a href="#">
                                        <img src="../img/logo-item3.jpg" class="img-fluid rounded" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Giay MLB</h4>
                                <p class="mb-3">Loại: Giay</p>
                                <h5 class="fw-bold mb-3">450.000$</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                                <p class="mb-4">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                            id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                            aria-controls="nav-about" aria-selected="true">Sự miêu tả</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. 
                                            Susp endisse ultricies nisi vel quam suscipit </p>
                                        <p>Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic 
                                            icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                        <div class="px-2">
                                            <div class="row g-4">
                                                <div class="col-6">
                                                    <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Cân nặng</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">1 kg</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Giay</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Thuong hieu giay</p>
                                                        </div>
                                                    </div>
                                                    <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Chất lượng</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">San pham</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Kiểm tra</p>
                                                        </div>
                                                
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-vision" role="tabpanel">
                                        <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                            amet diam et eos labore. 3</p>
                                        <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                            Clita erat ipsum et lorem et sit</p>
                                    </div>
                                </div>
                            </div>
                            <form action="#">
                                <h4 class="mb-5 fw-bold">Để lại một câu trả lời</h4>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="text" class="form-control border-0 me-4" placeholder="Tên của bạn *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="email" class="form-control border-0" placeholder="Email của bạn *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded my-4">
                                            <textarea name="" id="" class="form-control border-0" cols="30" rows="8" placeholder="Đánh giá của bạn *" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between py-3 mb-5">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 me-3">Vui lòng đánh giá:</p>
                                                <div class="d-flex align-items-center" style="font-size: 12px;">
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn border border-secondary text-primary rounded-pill px-4 py-3"> Đăng bình luận</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="row g-4 fruite">
                            <div class="col-lg-12">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="từ khóa" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
</div>

<div class="mb-4">
    <h4>Thể loại</h4>
    <ul class="list-unstyled fruite-categorie">
        <li>
            <div class="d-flex justify-content-between fruite-name">
                <a href="#"><i class="fas fa-apple-alt me-2"></i>Giay MLB</a>
                <span>(3)</span>
            </div>
        </li>
        <li>
            <div class="d-flex justify-content-between fruite-name">
                <a href="#"><i class="fas fa-apple-alt me-2"></i>Giay Nike</a>
                <span>(5)</span>
            </div>
        </li>
        <li>
            <div class="d-flex justify-content-between fruite-name">
                <a href="#"><i class="fas fa-apple-alt me-2"></i>Giay Sampa</a>
                <span>(2)</span>
            </div>
        </li>
        <li>
            <div class="d-flex justify-content-between fruite-name">
                <a href="#"><i class="fas fa-apple-alt me-2"></i>Giay Adidas</a>
                <span>(8)</span>
            </div>
        </li>
        <li>
            <div class="d-flex justify-content-between fruite-name">
                <a href="#"><i class="fas fa-apple-alt me-2"></i>Giay Vans</a>
                <span>(5)</span>
            </div>
        </li>
    </ul>
</div>
</div>
<div class="col-lg-12">
<div class="mb-3">
    <h4 class="mb-2">Giá</h4>
    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
    <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
</div>
</div>
<div class="col-lg-12">
<div class="mb-3">
    <h4>Thêm vào</h4>
    <div class="mb-2">
        <input type="radio" class="me-2" id="Thể loại-1" name="Thể loại-1" value="Beverages">
        <label for="Thể loại-1"> Giày Samba</label>
    </div>
    <div class="mb-2">
        <input type="radio" class="me-2" id="Thể loại-2" name="Thể loại-1" value="Beverages">
        <label for="Thể loại-2"> Khuyêns Mãi</label>
    </div>
    <div class="mb-2">
        <input type="radio" class="me-2" id="Thể loại-3" name="Thể loại-1" value="Beverages">
        <label for="Thể loại-3"> Bán hàng</label>
    </div>
    <div class="mb-2">
        <input type="radio" class="me-2" id="Thể loại-4" name="Thể loại-1" value="Beverages">
        <label for="Thể loại-4"> Giảm giá</label>
    </div>
    <div class="mb-2">
        <input type="radio" class="me-2" id="Thể loại-5" name="Thể loại-1" value="Beverages">
        <label for="Thể loại-5"> Hết hạn</label>
    </div>
</div>
</div>
<div class="col-lg-12">
<h4 class="mb-3">Sản phẩm nổi bật</h4>
<div class="d-flex align-items-center justify-content-start">
    <div class="rounded me-4" style="width: 100px; height: 100px;">
        <img src="../img/logo-item1.jpg" class="img-fluid rounded" alt="">
    </div>
    <div>
        <h6 class="mb-2">Giày Jordan</h6>
        <div class="d-flex mb-2">
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="d-flex mb-2">
            <h5 class="fw-bold me-2">400.000 $</h5>
            <h5 class="text-danger text-decoration-line-through">400.00 $</h5>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-start">
    <div class="rounded me-4" style="width: 100px; height: 100px;">
        <img src="../img/logo-item1.jpg" class="img-fluid rounded" alt="">
    </div>
    <div>
        <h6 class="mb-2">Giày Jordan</h6>
        <div class="d-flex mb-2">
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="d-flex mb-2">
            <h5 class="fw-bold me-2">400.000$</h5>
            <h5 class="text-danger text-decoration-line-through">400.000$</h5>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-start">
    <div class="rounded me-4" style="width: 100px; height: 100px;">
        <img src="../img/logo-item1.jpg" class="img-fluid rounded" alt="">
    </div>
    <div>
        <h6 class="mb-2">Giày Jordean</h6>
        <div class="d-flex mb-2">
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star text-secondary"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="d-flex mb-2">
            <h5 class="fw-bold me-2">400.000$</h5>
            <h5 class="text-danger text-decoration-line-through">400.000 $</h5>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center my-4">
    <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Xem thêm</a>
</div>
</div>
<div class="col-lg-12">
<div class="position-relative">
    <img src="../img/logo-item1.jpg" class="img-fluid w-100 rounded" alt="">
    <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
        <h3 class="text-secondary fw-bold">Giay <br> Giay Hieu <br></h3>
    </div>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="row g-4 justify-content-center">
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item1.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Jordan</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">450.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item2.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Nike</h4>
    
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">300.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item3.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay MLB</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">400.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item4.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay MLB Bostan</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">500.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item6.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Adids</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">350.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item7.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Adidas Samba</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">550.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item8.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Vans</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">250.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item9.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Vans Classic</h4>
    
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">300.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="rounded position-relative fruite-item">
    <div class="fruite-img">
        <img src="../img/logo-item1.jpg" class="img-fluid w-100 rounded-top" alt="">
    </div>
    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Giay</div>
    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
        <h4>Giay Jordan</h4>
        
        <div class="d-flex justify-content-between flex-lg-wrap">
            <p class="text-dark fs-5 fw-bold mb-0">400.000$</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
</div>
<div class="col-12">
<div class="pagination d-flex justify-content-center mt-5">
    <a href="#" class="rounded">&laquo;</a>
    <a href="#" class="active rounded">1</a>
    <a href="#" class="rounded">2</a>
    <a href="#" class="rounded">3</a>
    <a href="#" class="rounded">4</a>
    <a href="#" class="rounded">5</a>
    <a href="#" class="rounded">6</a>
    <a href="#" class="rounded">&raquo;</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- trái cây Shop End-->
@endsection
@section('header')
<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
@endsection