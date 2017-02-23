<meta charset="utf-8" /> 
<title>The Best Online Shopping Experience in Doha, Qatar.</title>
<meta name="keywords" content="Shop in Qatar, Shop in Doha, Shop in Dubai, Electronics, Computers, Mobile Phones, Fashion Brands, Clothing, Online Shopping, Deals, dohabestbuy.com, Doha Beat Buy, Buy, Sell, Online Market <?= isset($meta_key)? $meta_key :"" ?>">
<meta name="description" content="The Best Online Shopping Experience in Doha, Qatar. <?= isset($meta_des)? $meta_des :"" ?>" />
<meta name="generator" content="" />
<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
<link rel="icon" href="<?= base_url() ?>images/favicon.png"	type="image/x-icon" /> 
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>images/favicon.png" />


	
<link rel="stylesheet" href="<?= base_url() ?>css/style.css?v=2.1" type="text/css" media="all" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,800,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<?php $d = array();  foreach($this->compare->contents() as $i ) $d[] = (int)$i['id'] ; ?>
<script>
    var comparedProductsIds = <?= json_encode($d) ?>;
</script>