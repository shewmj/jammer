<h1 class="text-center">How Salty?</h1>
<div class="col-lg-12">
    <div class="col-lg-3">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                Presets
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                {set}
                <li>
                    <a href="/Welcome/set{id}"> {name}</a>
                </li>
                {/set}
            </ul>
        </div>
    </div>

    <br><br>
    <div>
        <h4>Calories: {calorieCount}</h4>
    </div>
     <div>
        <h4>Salt: {saltCount}</h4>
    </div>
     <div>
        <h4>Price: {priceCount}</h4>
    </div>

    <div class="col-lg-9 picture">
        <div style="text-align:center">
            <img style="width:10%" src="{topping}.png"/>
        </div>
        <div style="text-align:center">
            <img style="width:10%" src="{sauce}.png"/>
        </div>
        <div style="text-align:center">
            <img style="width:10%" src="{veggie}.png"/>
            <img style="width:10%" src="{protein}.png"/>
        <div style="text-align:center">
            <img style="width:10%" src="{grain}.png"/>
        </div>
        <div style="text-align:center">
            <img style="width:10%" src="/assets/images/emptyBowl.png"/>
        </div>
    </div>
    </div>
</div>
