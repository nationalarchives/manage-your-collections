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
        <div class="col starts-at-full ends-at-half clr">
            <nav id="page-controls">
                <ul>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/help/discovery-help.htm" target="_blank"
                           onclick="dcsMultiTrack('DCS.dcsuri','/SearchHelp', 'WT.ti', 'Search Help', 'WT.cg_n', 'Search Help', 'WT.dl','0');"
                           id="helpLink">
                            Discovery help
                        </a>
                    </li>
                    <a href="/sign-in" id="bookmarkLink">Bookmark</a>
                </ul>
            </nav>
        </div><!-- end col -->
    </section>
    <section class="row">
        <div class="col starts-at-full clr box">
            <div class="heading-holding-banner">
                <h1><span><span>Manage your collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs">
                        <li><a href="index.php">Find a collection</a></li>
                        <li><a href="add.php">Add a collection</a></li>
                        <li><a href="history.php" class="active">View history</a></li>
                        <li><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- Search list -->
                <h2>Sample preview</h2>
                <span class="emphasis-block"><span>Are you happy with your uploaded changes?<button>Approve</button></span></span>
                <h3 class="top-large">HALTON, THOMAS</h3>
                <div class="table table-responsive">
                    <table class="condensed striped top-none">
                        <tbody>
                        <tr>
                            <td>Reference code</td>
                            <td>0/0432</td>
                        </tr>
                        <tr>
                            <td>Name of creator</td>
                            <td>Lorem ipsum dolor sit amet</td>
                        </tr>
                        <tr>
                            <td>Dates of creation</td>
                            <td>1900</td>
                        </tr>
                        <tr>
                            <td>Level of description</td>
                            <td>Consectetur adipiscing elit</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
                <h4>Context of this record</h4>
                            <ul id="hierarchy">
                                <a href="/browse">All departments</a>
                                <li class="tree">
                                    <a href="/browse/r/h/C8">AIR - Records created or inherited by the Air Ministry, the Royal Air Force, and related bodies</a>
                                </li>
                                <li class="tree">
                                    <a href="/browse/r/h/C955">Records of the Department of the Master General of Personnel and the Air Member for Personnel</a>
                                </li>
                                <li class="tree">
                                    <a href="/browse/r/h/C2130">AIR 76 - Air Ministry: Department of the Master-General of Personnel: Officers' Service Records</a>
                                </li>
                                <li class="tree">
                                    <a href="/browse/r/h/C510468">AIR 76/350 - Milman, Hugh - Mitchell, Basil</a>
                                </li>
                                <li class="tree">
                                    <a href="/browse/r/h/D8206854">AIR 76/350/126 - Name   Minall, Alfred Hamblyn     Date of Birth:   25 July 1899</a>
                                </li>
                            </ul>


            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>