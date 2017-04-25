<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collections</a></li>
                    <li>View history</li>
                </ul>
            </nav>
        </div><!-- end col -->
    </section>
    <section class="row">
        <div class="col starts-at-full clr box">
            <div class="heading-holding-banner">
                <h1><span><span>Edit collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li role="menuitem"><a href="index.php">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="details.php" class="active">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- MAIN CONTENT -->
                <h2>Collections which have been added, edited or deleted</h2>
                <form class="filter-space" action="#" method="post">
                    <p class="form-spacer">
                        <label for="history-options">Showing</label>
                        <select id="history-options">
                            <option>All history</option>
                            <option>Added/edited collections only</option>
                            <option>Deleted collections only</option>
                            <option>Restored collections</option>
                            <option>Downloaded collections</option>
                        </select>
                        <input type="submit" class="button" value="Filter">
                    </p>
                </form>

                <div class="">
                    <span role="alert" class="emphasis-block information"><span>Collection updates may take up to 3 days. To see the most current information, please refresh this page regularly. <button>Refresh</button></span></span>
                </div>
                <!-- ITEM LIST -->
                <div class="item clr">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - upload ready to check</small></h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li class="complete">Data validated</li>
                                <li>Previewed</li>
                                <li>Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                        <a class="button" href="preview.php">Preview and approve &gt;</a>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - uploaded</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <a class="button" href="">View in Discovery &gt;</a>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - upload in progress</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li>Data validated</li>
                                <li>Previewed</li>
                                <li>Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>

                    <div class="collection upload">
                        <h3>GBO8972.xls - upload failed</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li class="incomplete">Data validated</li>
                                <li>Previewed</li>
                                <li>Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                        <a class="button" href="report.php">See error report &gt;</a>
                    </div>

                </div>

                <div class="item clr error-block">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - upload failed</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li class="complete">Data validated</li>
                                <li class="complete">Previewed</li>
                                <li class="incomplete">Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                        <p class="warning">We had a problem with our system. <a class="" href="">Try uploading your file again &gt;</a></p>
                    </div>

                </div>

                <div class="item clr warning-block">
                    <p>1 Dec 2015 at 13:02 by Jane Gray</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - preview rejected</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li class="complete">Data validated</li>
                                <li class="incomplete">Previewed</li>
                                <li>Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                    </div><!-- end collection -->

                </div><!-- end item -->

                <div class="item clr">
                    <p>12 Nov 2015 at 10:24 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>GBO8972.xls - Upload in progress</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li class="complete">Data validated</li>
                                <li class="complete">Collection updated</li>
                                <li class="complete">Previewed</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection delete">
                        <h3>Deleted</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <p class="warning">5 days left to restore this collection</p>
                        <a class="button" href="">Restore</a>

                    </div>
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection delete">
                        <h3>Delete failed</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <p class="warning">We had a problem with our system. <a class="" href="">Try uploading your file again &gt;</a></p>
                    </div>
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection download">
                        <h3>Download ready</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <a class="button" href="">Download collection</a>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection download">
                        <h3>Download failed</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <p class="warning">We had a problem with our system. <a class="" href="">Try downloading your file again &gt;</a></p>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restored</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <a class="button" href="">View in Discovery &gt;</a>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restore in progress</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Collection restored</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->

                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restore failed</h3>
                        <p>Ref: 0/0432 | Title: HALTON, THOMAS</p>
                        <p class="warning">We had a problem with our system. <a class="" href="">Try restoring your file again &gt;</a></p>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="paginationWrapper manage-collections">
                    <ul class="pagination">
                        <li class="current"><span>1</span></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                        <li><a href="">8</a></li>
                        <li><a href="">9</a></li>
                        <li class="next"><a href="">Next</a></li>
                    </ul>
                </div><!-- end paginationWrapper -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>