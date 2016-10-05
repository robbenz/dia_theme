<?php benz_add_category_headers();

$imagingLinks = array(
  array(
    "name" => "Fujitsu Imaging Parts",
    "img"  => "/wp-content/uploads/wpallimport/files/imaging-parts/Fujitsu.png",
    "slug" => "fujitsu-imaging-parts"
  ),
  array(
    "name" => "GE Imaging Parts",
    "img"  => "/wp-content/uploads/wpallimport/files/imaging-parts/GE.png",
    "slug" => "ge-imaging-parts"
  ),
  array(
    "name" => "Siemens Imaging Parts",
    "img"  => "/wp-content/uploads/wpallimport/files/imaging-parts/Siemens.png",
    "slug" => "siemens-imaging-parts"
  ),
  array(
    "name" => "All Imaging Parts A-L",
    "img"  => "/wp-content/uploads/wpallimport/files/imaging-parts/HP.png",
    "slug" => "imaging-parts-a-l"
  ),
  array(
    "name" => "All Imaging Parts K-Z",
    "img"  => "/wp-content/uploads/wpallimport/files/imaging-parts/Toshiba.png",
    "slug" => "imaging-parts-k-z"
  )

);
?>

<ul class="products">
  <?php
foreach ($imagingLinks as $link) :

?>

  <li class="product-category product">
    <a href="<?php echo site_url(); ?>/<?php echo $link[slug]; ?>">
      <img src="<?php echo site_url(); ?>/<?php echo $link[img]; ?>" alt="<?php echo $link[name]; ?>" width="250" height="275" />
      <h3><?php echo $link[name]; ?></h3>
    </a>
  </li>

<?php endforeach ; ?>
</ul>

<p class="diva" style="margin-top:200px; float: right; font-size: 13px; text-align: center; width: 100%;">
  DiaMedical USA is a proud supplier of high quality medical imaging parts and equipment to hospitals, training facilities and other healthcare facilities across the United States. We carry an assortment of reconditioned imaging parts, refurbished imaging parts, and new imaging parts that are guaranteed to satisfy our customers’ needs. We provide large discounts on imaging parts to insure the lowest prices on medical imaging parts. We have also launched a new online ordering system for instant quotes and purchases on all imaging parts. We supply diagnostic medical imaging equipment and medical imaging parts for Magnetic Resonance Imaging (MRI), Positron emission tomography-computed tomography (PET/CT), Computed Tomography (CT), Cardio Pulmonary Resuscitation (CPR), Complete Remission/ Complete response (CR), C-Arm machine, Digital X-Ray machine and the Siemens ECAT Series. We guarantee the lowest prices on imaging parts for ECAT Exact 47, ECAT Exact HR+, and ECAT Accel in the Siemens ECAT Series. These discounted medical imaging parts are supplied by AccuSync Medical Research Corporation, AKG Acoustics’ microphones and headphones, Asante Insulin pumps, Biodex Medical System, Black Box Network Services, Capintec INC, Condonics medical imaging and information management for diagnostic imaging, CONMED monitoring products, CTI PET Systems INC, CPS, Dell, EAO, Eizo Diagnostic Monitors, EPCOS, ebm-papst Inc., Fujitsu, GE Healthcare medical imaging and information technologies, Globalstor data corporation, Hengstler medical and electronic components, Hofmann, Honeywell, HP, IBM, Ivy Biomedical Systems, Kraus &amp; Naimer, Lambda, Leoni, Lexmark Healthcare, Liteon, Ludlum, LUST, Magnetic, NEC, NVIDIA, ORION, PAPST, Picker medical equipment, Plexor, PolyScience, Powerware, Rafi, Riedel, Seagate, Siemens Healthineers, Sony, Speck, Spellman, Stabilus, Timonta, Thermo Fisher Scientific imaging applications, Toshiba Medical Systems Corporation and Transector. This allows us to provide the best selection at the most competitive price for diagnostic medical imaging equipment and medical imaging parts.
</p>
