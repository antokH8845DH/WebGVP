<?php

use App\Controllers\Product;
?>
<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/cssku/cssku.css">
<?= $this->endSection('head') ?>
<?= $this->section('content') ?>

<div class="" style="padding-top:8rem">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6">
                    <div class="owl-carousel portfolio-details-carousel" style="text-align: center;">
                        <img src="<?= base_url('/image/Product/MS480-1.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/MS480-2.jpg'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/MS480-3.jpg'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/MS480-4.jpg'); ?>" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-lg-6">
                    <h3>MS480</h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: Automatic BioChemistry Analyzer</li>
                        <li><strong>Brand</strong>: Medical System</li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p style="color:dimgray">
                                Throughput: up to 400T/H.<br>
                                Type Fully automatic, random option<br>

                                80 refrigeting reagent positions<br>
                                340nm-750nm, 12 wavelengths<br>
                                Economic<br>
                                Reliability<br>
                                Accuracy<br>
                                Convinience<br>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p style="color:dimgray">
                                ~ Throughput : up to 400 tests/hour (600 T/H with ISE)</i><br>
                                ~ Photometry : Mono-chromatic & Bi-chromatic measurements with Multi-wavelength diffraction grating with 12 wavelength options, 340 - 750 nm</i><br>
                                ~ Assay Method : 1-Point end, 2-Point end, Fixed, Rate-A and Rate-B</i><br>
                                ~ Calibration : Linear, Non-linear, Multipoint, K factor</i><br>
                                ~ Sample tray : 50 position samples (all positions can be used for STAT Sample)</i><br>
                                ~ Sample volume : 2-60 uL in 0.1 uL step</i><br>
                                ~ Reagent tray : 80 refrigating reagent positions</i><br>
                                ~ Reaction cuvette : cuvette made of quartz</i><br>
                                ~ Reaction time : 8.5 minutes</i><br>
                                ~ Reaction incubation : 37°C, dry bath</i><br>
                                ~ Light source : longlife halogen lamp 12V/20W</i><br>
                                ~ Barcode reader : Optional</i><br>
                                ~ Rinse : Automatic washing and drying</i><br>
                                ~ Dimension & weight: 1040 (W)x780(D)x1200(H), Approx. 250kg</i><br>
                                ~ Support bi‐directional LIS</i><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <h2>Reagents</h2>
                <p style="color:dimgray">More than 130 types of Biochemistry Reagent</p>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <!-- <img src="<?= base_url(); ?>/image/product/parametersAutobio.png" class="img-fluid" alt=""> -->
                    <p style="color: dimgray;text-align: justify;">
                        <b style="">Liver Markers</b><br>
                        Alanine Aminotransferase |
                        Aspartate Aminotransferase |
                        Alkaline Phosphatase |
                        γ-Glutamyltransferase |
                        Total Protein |
                        Albumin |
                        Direct Bilirubin |
                        Total Bilirubin |
                        Cholinesterase |
                        Total Bile Acid Enzymatic Colorimetric Method |
                        Total Bile Acid (V) Enzyme Cycling Method |
                        Adenosine Deaminase |
                        5'-Nucleotidase |
                        Glycylproline Dipeptidyl Aminopeptidase |
                        Prealbumin |
                        Ammonia |
                        Leucine Aminopeptidase |
                        Cholyglycine<br></p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Renal Markers</b><br>
                        Creatinine Jaffe Method |
                        Creatinine Enzymatic Method |
                        UREA |
                        Uric Acid |
                        β2 Microglobin |
                        Cystatin C |
                        Retinal Binding Protein |
                        α1 Microglobin |
                        N-Acetyl-β-D-Glucosaminidase |
                        Cerebrospinal fluid/Urinary Total Protein |
                        Microalbuminuria |
                        Neutrophil Gelatinase-Associated Lipocalin<br>
                    </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Cardiovascular Markers</b><br>
                        Creatine Kinase Enzymatic Method |
                        Creatine Kinase MB Immunosuppression Method |
                        Lactate Dehydrogenase |
                        Lactate Dehydrogenase Isozyme 1 |
                        α-Hydroxybutyrate Dehydrogenase |
                        Angiotensin Converting Enzyme |
                        High Sensitivity C-Reactive Protein |
                        Myoglobin |
                        Troponin I |
                        Ischemia-Modified Albumin |
                        Mitochondrial Asparate Aminotransferase |
                        Myeloperoxidase |
                        Heart-Type Fatty Acid Binding Protein |
                        Homocysteine<br>
                    </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Diabetis Markers</b><br>
                        Glucose Hexokinase Method |
                        Glucose Oxidase Method |
                        Fructosamine |
                        D-3-Hydroxybutyrate |
                        Glycated Hemoglobin A1c-LATAX |
                        Glycated Hemoglobin A1c Enzymatic Colorimetric Method |
                        Glycated Hemoglobin A1c Enzymatic Colorimetric Method |
                        Glycated Albumin |
                        Non-Esterified Fatty Acids |
                        Insulin |
                        1.5-anhydroglucitol<br>
                    </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Lipid Markers</b><br>
                        Triglycerides |
                        Total Cholesterol |
                        High-Density Lipoprotein Chelesterol |
                        Low-Density Lipoprotein Chelesterol |
                        Apolipoprotein A-I |
                        Apolipoprotein B |
                        Lipoprotein (a) |
                        Apolipoprotein E<br>
                    </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Pancreas Markers</b><br>
                        Amylase |
                        Lipase |
                        Pancreatic Amylase<br></p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Rheumatic & Infection Markers</b></br>
                        Anti-Streptolysin O |
                        C-Reactive Protein |
                        Rheumatiod Factor |
                        Full Range C-Reactive Protein |
                        Procalcitonin |
                        Anti-Cyclic Citrullinated Peptide Antibodies<br>
                    </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Immune</b><br>
                        Complement C3 |
                        Complement C4 |
                        Immunoglobin A |
                        Immunoglobin G |
                        Immunoglobin M<br></p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Electrolytes</b><br>
                        Bicarbonate |
                        Bicarbonate |
                        Calcium |
                        Magnesium |
                        Inorganic Phosphate |
                        Copper |
                        Zinc |
                        Iron |
                        Potassium |
                        Sodium |
                        Chloride<br></p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Tumor Marker</b>
                        Sialic Acid |
                        Superoxide Dismutase |
                        Pepsinogen I |
                        Pepsinogen II |
                        Ferritin |
                        Carcinoembryonic antigen |
                        α-Fetoprotein |
                        α-L-Fucosidase<br></p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: dimgray;text-align: justify;">
                        <b>Other Special Tests</b><br>
                        D-Dimer |
                        Fibrinogen Degradation |
                        Fibrinogen |
                        Lactate |
                        Transferrin |
                        Ethanol |
                        Glucose-6-Phosphate Dehydrogenase |
                        Fibronectin |
                        Haptoglobin |
                        Heart-Type Fatty Acid Binding Protein |
                        Monoamine Oxidase |
                        Total Iron Binding Capacity |
                        Urinary Retinol Binding Protein |
                        Urinary Transferrin |
                        Vitamin D</p>
                </div>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection('content') ?>
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>