<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">
                <?

                    if(isset($formErrors)){

                        echo "<div class=\"alert bg-danger\">
                <span class=\"text-semibold\">Hata!</span> <br>";

                        foreach ($formErrors as $key => $value){

                            switch ($key){

                                case "title":

                                    foreach ($value as $val){

                                        echo "<span class=\"text-semibold\">Başlık : </span> ".$val."<br>";

                                    }

                                    break;

                                case "content":

                                    foreach ($value as $val){

                                        echo "<span class=\"text-semibold\">İçerik : </span> ".$val."<br>";

                                    }

                                    break;

                            }

                        }

                        echo "</div>";

                    }

                ?>

            <div class="panel">

                <div class="panel-body">

                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= SITE_URL ?>/panel/runAddNewContent">

                        <fieldset class="content-group">
                            <legend class="text-bold">İçerik Ekle</legend>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Başlık</label>
                                <div class="col-lg-10">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">İçerik</label>
                                <div class="col-lg-10">
                                    <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kaydet <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

