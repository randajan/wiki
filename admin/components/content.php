<article>

    <div class="menu">
        <span>☰</span>
        <div class="cover">
            <ul class="parents">
                <?php
                    mdlink($current->grandfather(), "grandfather");
                    mdlink($current->father(), "father");
                ?>
            </ul>
            <ul class="childrens">
                <?php
                    foreach ($current->childrens() as $md) {
                        mdlink($md, "children");
                    }; 
                ?>
            </ul>
        </div>
    </div>

    <div class="content">
        <?php $current->content(); ?>
    </div>

</article>


