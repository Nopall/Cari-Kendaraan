<!-- TOP AREA -->
<div class="top-area show-onload">
    <div class="bg-holder full">
        <div class="bg-mask"></div>
        <div class="bg-parallax" style="background-image:url(privasi/resources/views/template/img/2048x1365.png);"></div>
        <div class="bg-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="search-tabs search-tabs-bg mt50">
                            <h1>Selamat Datang !</h1>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-car"></i> <span >Mobil</span></a>
                                    </li>
                                    <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-road"></i> <span >Motor</span></a>
                                    </li>
                                    <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-ra"></i> <span >Sepeda</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <form action="{{ route('template.sresult') }}">
                                        <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-car input-icon"></i>
                                                <label>Masukkan Nama Mobil</label>
                                                <input class="typeahead form-control" placeholder="Avanza, Xenia, Jazz" type="text" name="namob"/>
                                            </div>
                                            </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Merk Mobil</label>
                                                            <select class="form-control">
                                                                <option> - Pilih Merk - </option>
                                                                <option>Honda</option>
                                                                <option>Toyota</option>
                                                                <option>Daihatsu</option>
                                                                <option>Isuzu</option>
                                                                <option>Audi</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Transmisi</label>
                                                            <select class="form-control">
                                                                <option> - Pilih Transmisi - </option>
                                                                <option>Manual</option>
                                                                <option>Triptonic</option>
                                                                <option>Automatic</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Provinsi</label>
                                                            <select class="form-control">
                                                                <option> - Pilih Provinsi - </option>
                                                                <option>Jawa Timur</option>
                                                                <option>Jawa Tengah</option>
                                                                <option>Jawa Barat</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Kota</label>
                                                            <select class="form-control">
                                                                <option> - Pilih Kota - </option>
                                                                <option>Semua</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Bahan Bakar</label>
                                                            <select class="form-control">
                                                                <option> - Pilih Bahan Bakar - </option>
                                                                <option>Pertamax</option>
                                                                <option>Premium</option>
                                                                <option>Solar</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-5">
                                                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-show"></i>
                                                                    <label>Tahun Min</label>
                                                                    <input class="form-control" placeholder="Write something" type="text" />
                                                            </div>
                                                            </div>

                                                            <div class="col-md-5">
                                                            <div class="form-group form-group-icon-left">
                                                            <i class="fa fa-calendar input-icon input-icon-show"></i>
                                                                    <label>Tahun Max</label>
                                                                    <input class="form-control" placeholder="Write something" type="text" />
                                                            </div>
                                                            </div>
                                                </div>

                                            <button class="btn btn-primary btn-lg" type="submit">Cari Mobil</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="tab-2">
                                        <form action="{{ route('template.sresult') }}">
                                            <div class="tabbable">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="flight-search-1">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-road input-icon"></i>
                                                                    <label>Masukkan Nama Motor</label>
                                                                    <input class="typeahead form-control" placeholder="Satria, CBR, RX King" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="row">

                                                                      <div class="col-md-6">
                                                                          <div class="form-group form-group-lg form-group-select-plus">
                                                                            <label> Merk Motor </label>
                                                                              <select class="form-control">
                                                                                  <option> - Pilih Merk - </option>
                                                                                  <option>Honda</option>
                                                                                  <option>Yamaha</option>
                                                                                  <option>Suzuki</option>
                                                                                  <option>Kawasaki</option>
                                                                                  <option>Vespa</option>
                                                                              </select>
                                                                  </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                <div class="col-md-5">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-show"></i>
                                                        <label>Tahun Min</label>
                                                        <input class="form-control" placeholder="Write something" type="text" />
                                                </div>
                                                </div>

                                                <div class="col-md-5">
                                                <div class="form-group form-group-icon-left">
                                                <i class="fa fa-calendar input-icon input-icon-show"></i>
                                                        <label>Tahun Max</label>
                                                        <input class="form-control" placeholder="Write something" type="text" />
                                                </div>
                                                </div>
                                                </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Cari Motor</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="tab-3">
                                        <form action="{{ route('template.sresult') }}">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-ra input-icon"></i>
                                                <label>Masukkan Nama Sepeda</label>
                                                <input class="typeahead form-control" placeholder="Poligon, Wim Cycle" type="text" />
                                            </div>
                                            <div class="row">

                                                      <div class="col-md-6">
                                                          <div class="form-group form-group-lg form-group-select-plus">
                                                            <label> Merk Sepeda </label>
                                                              <select class="form-control">
                                                                  <option> - Pilih Merk - </option>
                                                                  <option>Polygon</option>
                                                                  <option>Wim Cycle</option>
                                                                  <option>United</option>
                                                                  <option>Raleigh</option>
                                                              </select>
                                                  </div>
                                            </div>
                                        </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Cari Sepeda</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP AREA  -->
