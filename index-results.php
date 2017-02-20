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
        <div class="col starts-at-full clr box min">
            <div class="heading-holding-banner">
                <h1><span><span>Manage your collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li role="menuitem"><a href="index.php" class="active">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                <h2 class="name">London Metropolitan Archives: City of London</h2>

                <!-- SEARCH/BROWSE COLLECTIONS TAB -->
                    <div class="search-box center">
                        <div class="breather">
                            <form action="search" method="post">
                                <label for="search-collections">Search a collection</label>
                                <input type="search" id="search-collections" name="search-collections" value="0/0432">
                                <input type="submit" name="submit" value="Search">
                            </form>
                        </div><!-- end breather -->
                    </div><!-- end search-box -->

                    <!-- Search list -->
                    <h4>1 record(s) found</h4>
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
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>