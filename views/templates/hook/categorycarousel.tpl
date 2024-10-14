{*div id="category-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        {foreach from=$categories item=category}
            <div class="carousel-item {if $category@first}active{/if}">
                <a href="{$category.link}">
                    <img src="{$category.img}" alt="{$category.name}" class="d-block w-100">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>{$category.name}</h5>
                </div>
            </div>
        {/foreach}
    </div>
    <a class="carousel-control-prev" href="#category-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#category-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>*}

<div class="product-categories">
    
    <a href="https://mediumturquoise-cheetah-573749.hostingersite.com/79-freshwater">
    <div class="category-column category-1">
        <h3>Freshwater</h3>
    </div>
    </a>
    <a href="https://mediumturquoise-cheetah-573749.hostingersite.com/80-marine">
    <div class="category-column category-2">
        <h3>Marine</h3>
    </div>
    </a>
    
    <a href="https://mediumturquoise-cheetah-573749.hostingersite.com/81-coral">
    <div class="category-column category-3">
        <h3>Coral</h3>
    </div>
    </a>
</div>