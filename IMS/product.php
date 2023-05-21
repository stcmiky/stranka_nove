<?php
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/product.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php'); ?>
<div class="container">

    <?php include("menus.php"); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default rounded-0 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            <h3 class="card-title">Zoznam produktov</h3>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-end">
                            <button type="button" name="add" id="addProduct" class="btn btn-primary bg-gradient rounded-0 btn-sm"><i class="far fa-plus-square"></i> Pridať produkt</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table id="productList" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategória</th>
                                        <th>Názov značky</th>
                                        <th>Názov produktu</th>
                                        <th>Model produktu</th>
                                        <th>Množstvo</th>
                                        <th>Názov dodávateľa</th>
                                        <th>Stav</th>
                                        <th>Akcia</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="productModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Pridať produkt</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="productForm">
                        <input type="hidden" name="pid" id="pid" />
                        <input type="hidden" name="btn_action" id="btn_action" />
                        <div class="form-group">
                            <label>Vyberte Kategóriu</label>
                            <select name="categoryid" id="categoryid" class="form-select rounded-0" required>
                                <option value="">Vyberte Kategóriu</option>
                                <?php echo $inventory->categoryDropdownList(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vyberte položku</label>
                            <select name="brandid" id="brandid" class="form-select rounded-0" required>
                                <option value="">Vyberte položku</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Názov produktu</label>
                            <input type="text" name="pname" id="pname" class="form-control rounded-0" required />
                        </div>
                        <div class="form-group">
                            <label>Model produktu</label>
                            <input type="text" name="pmodel" id="pmodel" class="form-control rounded-0" required />
                        </div>
                        <div class="form-group">
                            <label>Popis produktu</label>
                            <textarea name="description" id="description" class="form-control rounded-0" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Množstvo produktu</label>
                            <div class="input-group">
                                <input type="text" name="quantity" id="quantity" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                                <select name="unit" class="form-select rounded-0" id="unit" required>
                                    <option value="">Vyberte tovar</option>
                                    <option value="Bags">Tašky</option>
                                    <option value="Bottles">Fľaše</option>
                                    <option value="Box">Krabice</option>
                                    <option value="Dozens">Desiatky</option>
                                    <option value="Feet">Nohy</option>
                                    <option value="Gallon">Gaóny</option>
                                    <option value="Grams">Gramy</option>
                                    <option value="Inch">Inch</option>
                                    <option value="Kg">Kilá</option>
                                    <option value="Liters">Litre</option>
                                    <option value="Meter">Metre</option>
                                    <option value="Nos">Čísla</option>
                                    <option value="Packet">Balíky</option>
                                    <option value="Rolls">Rolky</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Základná cena produktu</label>
                            <input type="text" name="base_price" id="base_price" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                        </div>
                        <div class="form-group">
                            <label>Daň z produktu (%)</label>
                            <input type="text" name="tax" id="tax" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                        </div>
                        <div class="form-group">
                            <label>Dodávateľ</label>
                            <select name="supplierid" id="supplierid" class="form-select rounded-0" required>
                                <option value="">Vyberte dodávateľa</option>
                                <?php echo $inventory->supplierDropdownList(); ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="action" id="action" class="btn btn-primary rounded-0 btn-sm" value="Agregar" form="productForm" />
                    <button type="button" class="btn btn-default border rounded-0 btn-sm" data-bs-dismiss="modal">Zavrieť</button>
                </div>
            </div>
        </div>
    </div>

    <div id="productViewModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" id="product_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-th-list"></i> Informácie o produkte</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <Div id="productDetails"></Div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Zavrieť</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
