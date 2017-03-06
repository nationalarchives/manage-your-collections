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
                        <li role="menuitem"><a href="index.php">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php" class="active">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- Search list -->
                <h2>Sample preview</h2>
                <p>Below is a randomly selected item from your uploaded collection to show how it will appear in Discovery</p>
                <span role="alert" class="emphasis-block"><span>Are you happy with your uploaded changes?<button>Approve</button><button class="secondary">Reject</button></span></span>
                <h3 class="top-large">HALTON, THOMAS</h3>
                <div class="table table-responsive">
                    <table class="condensed striped top-none">
                        <tbody>
                        <tr>
                            <td class="large">Reference code</td>
                            <td>0/0432</td>
                        </tr>
                        <tr>
                            <td class="large">Name of creator</td>
                            <td>Lorem ipsum dolor sit amet</td>
                        </tr>
                        <tr>
                            <td class="large">Dates of creation</td>
                            <td>1900</td>
                        </tr>
                        <tr>
                            <td class="large">Level of description</td>
                            <td>Consectetur adipiscing elit</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
                <h4>Context of this record</h4>
                <div class="containing-panel">
                            <ul>
                                <li>Level 1</li>
                                <li>Level 1</a></li>
                                <li>Level 1
                                    <ul>
                                        <li>Level 2
                                            <ul>
                                                <li>Level 3
                                                    <ul>
                                                        <li>Level 4
                                                            <ul>
                                                                <li>Level 5
                                                                    <ul>
                                                                        <li>Level 6
                                                                            <ul>
                                                                                <li>Level 7
                                                                                    <ul>
                                                                                        <li>Level 8
                                                                                            <ul>
                                                                                                <li>Level 9
                                                                                                    <ul>
                                                                                                        <li class="current">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum non urna et aliquam. Donec rhoncus felis dui, a ultricies nulla facilisis at. Morbi elementum nibh sit amet urna pulvinar, et ultrices erat tristique.</li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                </div><!-- end containing-panel -->
            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>