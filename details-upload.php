<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collections</a></li>
                    <li>Edit a collection</li>
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
                        <li role="menuitem"><a href="index.php" class="active">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                <div class="clr">
                    <h2>Map your fields to Discovery</h2>
                    <p>If the field names in your catalogue data are not the same as the ones we use in Discovery, we
                        need to know how to match – or ‘map’ – your fields to ours.</p>
                    <p>Tell us which fields in Discovery correspond to the fields in your catalogue data.</p>
                    <p>You can create a new mapping, or reuse one that you have created previously.</p>
                    <p><span class="mandatory">* = required fields</span></p>
                    <div class="feature-utilities-header">
                        <form action="#" method="post">
                            <p class="form-spacer">
                                <label for="history-options">How would you like to map your fields?</label>
                                <select id="history-options">
                                    <option>Create a new mapping</option>
                                    <option>Matt's metadata schema 1</option>
                                    <option>Matt's metadata schema 2</option>
                                </select>
                                <input type="submit" class="button" value="Continue">
                            </p>
                        </form>
                    </div>
                    <form action="#" method="post">
                        <div class="grid-within-grid-three-item clr" id="mapping">
                            <div id="discovery-fields"><!-- start grid one -->
                                <h3><span>1</span> Select a Discovery field</h3>
                                <div class="data-item">
                                    <input type="radio" id="level_of_description" name="discovery_field"
                                           value="Level of description">
                                    <label for="level_of_description">Level of description <span
                                                class="mandatory">*</span></label>
                                    <div class="definition" id="def_level_of_description">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="title" name="discovery_field" value="Title">
                                    <label for="title">Title <span class="mandatory">*</span></label>
                                    <div class="definition" id="def_title">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="name_of_creator" name="discovery_field"
                                           value="Name of creator(s)">
                                    <label for="name_of_creator">Name of creator(s) <span
                                                class="mandatory">*</span></label>
                                    <div class="definition" id="def_name_of_creator">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="scope_and_content" name="discovery_field"
                                           value="Scope and content">
                                    <label for="scope_and_content">Scope and content <span
                                                class="mandatory">*</span></label>
                                    <div class="definition" id="def_scope_and_content">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="reference_code" name="discovery_field"
                                           value="Reference code">
                                    <label for="reference_code">Reference code <span class="mandatory">*</span></label>
                                    <div class="definition" id="def_reference_code">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="covering_dates" name="discovery_field"
                                           value="Covering dates">
                                    <label for="covering_dates">Covering dates <span class="mandatory">*</span></label>
                                    <div class="definition" id="def_covering_dates">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="start_date" name="discovery_field" value="Start date">
                                    <label for="start_date">Start date <span class="mandatory">*</span></label>
                                    <div class="definition" id="def_start_date">
                                        <p><br> A note as to whether the records being described are Public Records
                                            or not, as defined by the 1958 Act and its schedules (other Public
                                            Records and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="end_date" name="discovery_field" value="End date">
                                    <label for="end_date">End date <span class="mandatory">*</span></label>
                                    <div class="definition" id="def_end_date">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="physical_characteristics" name="discovery_field"
                                           value="Physical characteristics">
                                    <label for="physical_characteristics">Physical characteristics</label>
                                    <div class="definition" id="def_physical_characteristics">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="dimensions" name="discovery_field" value="Dimensions">
                                    <label for="dimensions">Dimensions</label>
                                    <div class="definition" id="def_dimensions">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="language" name="discovery_field" value="Language">
                                    <label for="language">Language</label>
                                    <div class="definition" id="def_language">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="former_reference" name="discovery_field"
                                           value="Former referemce">
                                    <label for="former_reference">Former reference</label>
                                    <div class="definition" id="def_former_reference">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="conditions_governing_access" name="discovery_field"
                                           value="Conditions governing access">
                                    <label for="conditions_governing_access">Conditions governing access</label>
                                    <div class="definition" id="def_conditions_governing_access">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="subjects" name="discovery_field" value="Subjects">
                                    <label for="subjects">Subjects</label>
                                    <div class="definition" id="def_subjects">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="legal_status" name="discovery_field" value="Legal status">
                                    <label for="legal_status">Legal status</label>
                                    <div class="definition" id="def_legal_status">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="accruals" name="discovery_field" value="Accruals">
                                    <label for="accruals">Accruals</label>
                                    <div class="definition" id="def_accruals">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="administrative_history" name="discovery_field"
                                           value="Administrative/Biographical history">
                                    <label for="administrative_history">Administrative/Biographical history</label>
                                    <div class="definition" id="def_administrative_history">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="finding_aids" name="discovery_field" value="Finding aids">
                                    <label for="finding_aids">Finding aids</label>
                                    <div class="definition" id="def_finding_aids">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="publication_note" name="discovery_field"
                                           value="Publication note">
                                    <label for="publication_note">Publication note</label>
                                    <div class="definition" id="def_publication_note">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="related_units" name="discovery_field"
                                           value="Related units of description">
                                    <label for="related_units">Related units of description</label>
                                    <div class="definition" id="def_related_units">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="source_of_acquisition" name="discovery_field"
                                           value="Immediate source of acquisition">
                                    <label for="source_of_acquisition">Immediate source of acquisition</label>
                                    <div class="definition" id="def_source_of_acquisition">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="arrangement" name="discovery_field" value="Arrangement">
                                    <label for="arrangement">Arrangement</label>
                                    <div class="definition" id="def_arrangement">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="note" name="discovery_field" value="Note">
                                    <label for="note">Note</label>
                                    <div class="definition" id="def_note">
                                        <p>A note as to whether the records being described are Public Records or
                                            not, as defined by the 1958 Act and its schedules (other Public Records
                                            and FOI Acts)</p>
                                    </div>
                                </div>
                            </div><!--end grid one -->
                            <div id="custom-fields"><!-- start grid two -->
                                <h3><span>2</span> Select your field</h3>

                                <div class="data-item">
                                    <input type="radio" id="user_insititution_name" name="user_field"
                                           value="institution.name">
                                    <label for="user_insititution_name">institution.name</label>
                                    <div class="definition" id="def_user_insititution_name">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_institution_code" name="user_field"
                                           value="institution.code">
                                    <label for="user_institution_code">institution.code</label>
                                    <div class="definition" id="def_user_institution_code">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_object_number" name="user_field" value="object_number">
                                    <label for="user_object_number">object_number</label>
                                    <div class="definition" id="def_user_object_number">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_title" name="user_field" value="title">
                                    <label for="user_title">title</label>
                                    <div class="definition" id="def_user_title">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_production_date_start" name="user_field"
                                           value="production.date.start">
                                    <label for="user_production_date_start">production.date.start</label>
                                    <div class="definition" id="def_user_production_date_start">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_production_date_end" name="user_field"
                                           value="production.date.end">
                                    <label for="user_production_date_end">production.date.end</label>
                                    <div class="definition" id="def_user_production_date_end">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_physical_description" name="user_field"
                                           value="physical_description">
                                    <label for="user_physical_description">physical_description</label>
                                    <div class="definition" id="def_user_physical_description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_collection" name="user_field" value="collection">
                                    <label for="user_collection">collection</label>
                                    <div class="definition" id="def_user_collection">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_description_level" name="user_field"
                                           value="description_level">
                                    <label for="user_description_level">description_level</label>
                                    <div class="definition" id="def_user_description_level">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_dimension_free" name="user_field"
                                           value="dimension.free">
                                    <label for="user_dimension_free">dimension.free</label>
                                    <div class="definition" id="def_user_dimension_free">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_parts_reference" name="user_field"
                                           value="parts_reference">
                                    <label for="user_parts_reference">parts_reference</label>
                                    <div class="definition" id="def_user_parts_reference">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_object_history_note" name="user_field"
                                           value="object_history_note">
                                    <label for="user_object_history_note">object_history_note</label>
                                    <div class="definition" id="def_user_object_history_note">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_creator" name="user_field" value="creator">
                                    <label for="user_creator">creator</label>
                                    <div class="definition" id="def_user_creator">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_acquisition_notes" name="user_field"
                                           value="acquisition.notes">
                                    <label for="user_acquisition_notes">acquisition.notes</label>
                                    <div class="definition" id="def_user_acquisition_notes">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_content_person_name_type" name="user_field"
                                           value="content.person.name.type">
                                    <label for="user_content_person_name_type">content.person.name.type</label>
                                    <div class="definition" id="def_user_content_person_name_type">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_content_person_name" name="user_field"
                                           value="content.person.name">
                                    <label for="user_content_person_name">content.person.name</label>
                                    <div class="definition" id="def_user_content_person_name">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_content_subject_type" name="user_field"
                                           value="content.subject.type">
                                    <label for="user_content_subject_type">content.subject.type</label>
                                    <div class="definition" id="def_user_content_subject_type">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_accruals" name="user_field" value="accruals">
                                    <label for="user_accruals">accruals</label>
                                    <div class="definition" id="def_user_accruals">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_system_of_arrangement" name="user_field"
                                           value="system_of_arrangement">
                                    <label for="user_system_of_arrangement">system_of_arrangement</label>
                                    <div class="definition" id="def_user_system_of_arrangement">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_access_category_notes" name="user_field"
                                           value="access_category.notes">
                                    <label for="user_access_category_notes">access_category.notes</label>
                                    <div class="definition" id="def_user_access_category_notes">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_environment_condition_notes" name="user_field"
                                           value="environmental_condition.notes">
                                    <label for="user_environment_condition_notes">environmental_condition.notes</label>
                                    <div class="definition" id="def_user_environment_condition_notes">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_part_of_reference" name="user_field"
                                           value="part_of_reference">
                                    <label for="user_part_of_reference">part_of_reference</label>
                                    <div class="definition" id="def_user_part_of_reference">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                                <div class="data-item">
                                    <input type="radio" id="user_part_of_title" name="user_field" value="part_of.title">
                                    <label for="user_part_of_title">part_of.title</label>
                                    <div class="definition" id="def_user_part_of_title">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada
                                            venenatis sollicitudin. Phasellus a nibh quis lectus sagittis scelerisque.
                                            Proin maximus vitae massa eget tristique. Vivamus sit amet ante eu turpis
                                            accumsan malesuada. Donec purus dui, rhoncus sit amet venenatis ac, tempor
                                            non dui.</p>
                                    </div>
                                </div>
                            </div><!-- end grid two -->
                            <div id="matched-fields"><!-- start grid three -->
                                <h3><span>3</span> Match these fields</h3>
                                <input type="submit" value="Match" id="match">
                    </form>
                    <form action="#" method="post">
                        <h4>Matched fields &nbsp;<a href="">Undo all</a></h4>
                        <ul></ul>
                </div><!-- end grid three -->
            </div><!--end grid within grid -->
            <div class="feature-utilities-footer">
                <label class="text-field" for="map_name">Give this mapping a name, to save it for future use <span
                            class="mandatory">*</span></label>
                <input type="text" id="map_name" name="map_name" placeholder="Example: london-metropolitan-mapping">
            </div>
            <div class="button-container">
                <input type="submit" value="Save this mapping and continue uploading data">
                <a href="" class="secondary-call">Delete this mapping</a>
            </div>
            </form>

        </div><!-- end tab panel-1 -->
        </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>