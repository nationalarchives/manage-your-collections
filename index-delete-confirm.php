<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full ends-at-half clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li>Manage your collection</li>
                </ul>
            </nav>
        </div><!-- end col -->
        <?php include 'controls.php'; ?>
    </section>
    <section class="row">
        <div class="col starts-at-full clr box">
            <div class="heading-holding-banner">
                <h1><span><span>Manage your collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li><a href="index.php" class="active">Find a collection</a></li>
                        <li><a href="add.php">Add a collection</a></li>
                        <li><a href="history.php">View history</a></li>
                        <li><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                
                <h2 class="name">London Metropolitan Archives: City of London</h2>

                <!-- SEARCH/BROWSE COLLECTIONS TAB -->
                    <div class="search-box center">
                        <div class="breather">
                            <form action="index-results.php" method="post">
                                <label for="search-collections">Search a collection</label>
                                <input type="search" id="search-collections" name="search-collections">
                                <input type="submit" name="submit" value="Search">
                            </form>
                        </div><!-- end breather -->
                    </div><!-- end search-box -->

                    <span role="alert" class="emphasis-block margin-bottom-large"><span>Your collection has been deleted</span></span>

                    <!-- Search list -->
                    <h3 class="margin-top-medium">3765 record(s) found</h3>
                    <div class="table table-responsive">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th>Ref no</th>
                                <th>Title</th>
                                <th>Covering date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="details.php" title="">0/0432</a></td>
                                <td><a href="details.php" title="">HALTON, THOMAS</a></td>
                                <td><a href="details.php" title="">1686</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">0/194</a></td>
                                <td><a href="" title="">BRAMLEY, JOSEPH</a></td>
                                <td><a href="" title="">1801</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">0/273</a></td>
                                <td><a href="" title="">WRIGHT, WILLIAM</a></td>
                                <td><a href="" title="">1727 - 1784</a></td>
                            </tr>
                            <tr>
                                <td>0/431</td>
                                <td>COLE, RICHARD</td>
                                <td>1828</td>
                            </tr>
                            <tr>
                                <td>0/449</td>
                                <td>Georgie Dale</td>
                                <td>1828</td>
                            </tr>
                            <tr>
                                <td><a href="" title="">0/475</a></td>
                                <td><a href="" title="">Cocks, Thomas Somers</a></td>
                                <td><a href="" title="">1808 - 1907</a></td>
                            </tr>
                            <tr>
                                <td>0/487</td>
                                <td>Independent Gas Light & Coke Company</td>
                                <td>1829 - 1830</td>
                            </tr>
                            <tr>
                                <td><a href="" title="">0/500</a></td>
                                <td><a href="" title="">WOOLLEY, EDWARD ALFRED</a></td>
                                <td><a href="" title="">1893</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">0/562</a></td>
                                <td><a href="" title="">Sewell Family</a></td>
                                <td><a href="" title="">1874</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">A/ATB</a></td>
                                <td><a href="" title="">ARCHIBISHOP TENNISON'S GRAMMAR SCHOOL, KENNINGTON OVAL</a></td>
                                <td><a href="" title="">1676 - 1923</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">A/ATG</a></td>
                                <td><a href="" title="">Archbishop Tennison's Grammar School, Kennington Oval</a></td>
                                <td><a href="" title="">1682 - 1957</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">A/BFS</a></td>
                                <td><a href="" title="">Records of the Bacon Free School, Bermondsey</a></td>
                                <td><a href="" title="">1703 - 1913</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">A/BFY</a></td>
                                <td><a href="" title="">BEAUFOY TRUST, LAMBETH AND ELDON SCHOOL, LAMBETH</a></td>
                                <td><a href="" title="">1851 - 1946</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">A/BGR</a></td>
                                <td><a href="" title="">Badger's Almshouses, Shoreditch</a></td>
                                <td><a href="" title="">1557 - 1698</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->

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