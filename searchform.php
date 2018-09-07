<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/" class="search-form">
    <div class="search-field-container">
        <input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="search-field" />
        <button type="submit" id="searchsubmit" value="Search" class="search-submit" ><i class="fas fa-search"></i></button>
    </div>
</form>