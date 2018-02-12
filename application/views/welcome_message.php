<h1 class="text-center">Jammer's Eatery</h1>
<div class="col-lg-12">
    <div class="col-lg-2">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                Presets
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                {set}
                <li>
                    <a href="/Welcome/set/{id}"> {name}</a>
                </li>
                {/set}
            </ul>
        </div>
    </div>


    <div class="col-lg-6 picture">
        <div style="text-align:center">
            Topping
            <img style="width:10%; border-style:dotted; border-width:3px; margin-right:55px; margin-bottom:5px;" src="{topping}.png"/>
        </div>
        <div style="text-align:center">
            Sauce
            <img style="width:10%; border-style:dotted; border-width:3px; margin-right:45px; margin-bottom:5px;" src="{sauce}.png"/>
        </div>
        <div style="text-align:center">
            Veggie
            <img style="width:10%; border-style:dotted; border-width:3px; margin-bottom:5px;" src="{veggie}.png"/>
            <img style="width:10%; border-style:dotted; border-width:3px; margin-bottom:5px;" src="{protein}.png"/>
            Protein
        </div>
        <div style="text-align:center">
            Grain
            <img style="width:10%; border-style:dotted; border-width:3px;margin-right:35px;" src="{grain}.png"/>
        </div>
        <div style="text-align:center">
            <img style="width:10%" src="/assets/images/emptyBowl.png"/>
        </div>
    </div>

    <div class="col-lg-4" style="text-align:center">
        <h2>
            {name}
        </h2>
        <div class="picture" style="border-style:solid; border-width:3px;">
            <div>
                <h4>Calories: {calorieCount}</h4>
            </div>
             <div>
                <h4>Salt: {saltCount}</h4>
            </div>
             <div>
                <h4>Price: {priceCount}</h4>
            </div>
        </div>
    </div>
</div>
