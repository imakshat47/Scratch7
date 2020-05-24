<section id="footer">
    <div class="container-fluid bg-light py-2">
        <div>
            <ul class="row d-flex justify-content-center">
                <li class="nav-link">
                    <a href="" class="nav-link"> Documentation</a>
                </li>
                <li class="nav-link">
                    <a href="" class="nav-link"> Theme</a>
                </li>
                <li class="nav-link">
                    <a href="" class="nav-link"> Blog</a>
                </li>
            </ul>
        </div>
        <div class="row d-flex justify-content-center">
            <small class="mb-3">copyright 2020</small>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php foreach ($this->js as $js)
    echo '<link rel="stylesheet" href="http://localhost/scratch/assets/js/' . $js . '.js">';
?>

</body>

</html>