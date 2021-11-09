<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="favicon.ico" alt="" width="30" height="30" class="d-inline-block align-middle">
            Code Share
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topBar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topBar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                <?php if (isset($_GET["id"])) { ?>
                    <!-- If found-->
                    <li class="nav-item"><a class="nav-link active" onclick="edit()" style="cursor: pointer;">Logout</a></li>
                <?php } else { ?>
                    <!-- If not found -->
                    <li class="nav-item"><a class="nav-link active" href="#">Save</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>