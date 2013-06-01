
<!--/**
 * Created by JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 01/06/13
 * Time: 09:46
 * To change this template use File | Settings | File Templates.
 */-->

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>"/>
    <input type="submit" value="Search" id="searchsubmit"/>
</form>