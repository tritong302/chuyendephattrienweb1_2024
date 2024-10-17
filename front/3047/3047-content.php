<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>3047</title>
</head>

<body>
    <div class="type-3047">
        <div class="container zz">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-3 mt-4">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="SEARCH PRODUCTS...">
                        <div class="input-group-append">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="mb-4 mt-4">
                        <div class="custom-font-size">Product categories</div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Clothing</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Music</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Posters</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Headphones</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i> Uncategorized</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <div class="filter">Filter by price</div>
                        <div class="price-range">
                            <input type="range" class="custom-range" min="10" max="100" value="70" step="10" id="priceRange" oninput="updatePrice()">
                        </div>
                        <button class="btn btn-danger mt-2">FILTER</button>
                        <p>Price:$10-$<span id="priceValue"></span></p>
                    </div>
                    <div>
                        <div class="top">Top rated products</div>
                        <div class="media mb-3">
                            <img src="img/1.jpg" class="mr-3" alt="Product">
                            <div class="media-body">
                                <div class="pell"> PELLENTESQUE HABITANT</div>
                                <span class="text-warning"><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i></span>
                                <p>$20.00</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <img src="img/2.jpg" class="mr-5" alt="Product">
                            <div class="media-body">
                                <div class="pell">AFEUGIAT VITAE</div>
                                <span class="text-warning"><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                                <p>$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
    <script>
        function updatePrice() {
            const range = document.getElementById('priceRange');
            const value = (range.value - range.min) / (range.max - range.min) * 100;
            range.style.background = `linear-gradient(to right, #ff4500 ${value}%, #eae3e3 ${value}%)`;
            document.getElementById('priceValue').innerText = `${range.value}`;
        }
        document.addEventListener('DOMContentLoaded', (event) => {
            updatePrice();
        });
    </script>
</body>

</html>