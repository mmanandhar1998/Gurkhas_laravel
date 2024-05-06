<section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-food">Food Menu</li>
              <li data-filter=".filter-drinks">Drinks Menu</li>
              <li data-filter=".filter-kids">Kids Menu</li>
              <li data-filter=".filter-set">Set Menu</li>
              <li data-filter=".filter-happy">Happy Hour</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          <!-- <p style="text-align: center;">"All Burgers are served with chips and tasty cheese"</p> -->
          <div class="col-lg-6 menu-item filter-food">
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Entree</p>
   
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Entree")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach
            <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Burger</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Burger")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach
           <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Salad</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Salad")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach            
            <br>          
            
            <!-- <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Sauce</p>
            <div class="menu-content">
              <a >Mushroom Sauce</a><span>$3</span>
            </div>
            <div class="menu-content">
              <a >Peppercone Sauce</a><span>$3</span>
            </div>
            <div class="menu-content">
              <a >Gravy Sauce</a><span>$3</span>
            </div><br> -->
            
          </div>
          <!-- Food 2nd Column -->
          <div  class="col-lg-6 menu-item filter-food">
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Main Course</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Main Course")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach      
            <br>           
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Pasta  & Noodles</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Pasta & Noodles")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach
            <br> 
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Sides</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Sides")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach
            <br>                 
          </div> 
          <!-- End of Food Menu -->

          <!-- Drinks Menu -->
          <div class="col-lg-6 menu-item filter-drinks">
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Signature Cocktail</p>            
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Signature Cocktail")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach         
            <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Classic Cocktail</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Classic Cocktail")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach  
            <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Vodka</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Vodka")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Rum</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Rum")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Gin</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Gin")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Tequila</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Tequila")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Scotch / Bourbon & Others</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Scotch / Bourbon & Others")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Liqueurs & Aperitifs</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Liqueurs & Aperitifs")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Brandy/Cognac</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Brandy/Cognac")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach 
          </div>
          <!-- End of 1st column Drinks menu -->

          <!-- 2nd column for Drinks -->
          <div class="col-lg-6 menu-item filter-drinks">
            <br>
            <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: larger; color: maroon;"><a >White Wine</a><span>150ml/Bottle</span></div>
            <div class="menu-content">
              <a>Squealing Pig Sav Blanc</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Marlborough, NZ)
            </div>            
            <div class="menu-content">
              <a>Devils Lair Chardonnay</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Margaret River, WA)
            </div>            
            <div class="menu-content">
              <a>T Gallant Encore Pinot Grigio</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Southern Eastern, Aus.)
            </div>            
            <div class="menu-content">
              <a>Juliet Moscato</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Southern Eastern, Aus.)
            </div>            
            <div class="menu-content">
              <a>Rosemount Blend Riesling</a><span>$60.00</span>
            </div>
            <div class="menu-ingredients">
              Only Bottle
            </div>
            <div class="menu-ingredients">
              (Southern Eastern, Aus.)
            </div>            
            <div class="menu-content">
              <a>Morgans Bay Sauvignon Blanc</a><span>$10.00/$47.00</span>
            </div>
            <div class="menu-ingredients">
              (SA)
            </div>
            <br> 
            <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: larger; color: maroon;"><a >Red Wine</a><span>150ml/Bottle</span></div>
            <div class="menu-content">
              <a>Pepperjack Shiraz</a><span>$85.00</span>
            </div>
            <div class="menu-ingredients">
              (Barossa, SA)
            </div>            
            <div class="menu-content">
              <a>Secret Stone Pinot Noir</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Marlborough, NZ)
            </div>            
            <div class="menu-content">
              <a>Devils Lair Cab Sav</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Margaret River, WA)
            </div>            
            <div class="menu-content">
              <a>Wolf Blass Merlot</a><span>$12.00/$57.00</span>
            </div>
            <div class="menu-ingredients">
              (Barossa, SA)
            </div>            
            <div class="menu-content">
              <a>McGuigan Malbec</a><span>$11.00/$52.00</span>
            </div>
            <div class="menu-ingredients">
              (Limestone Coast, SA)
            </div>            
            <div class="menu-content">
              <a>Morgans Bay Shiraz</a><span>$10.00/$47.00</span>
            </div>
            <div class="menu-ingredients">
              (SA)
            </div>  
            <br> 
            <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: larger; color: maroon;"><a >Sparkling</a><span>150ml/Bottle</span></div>          
            <div class="menu-content">
              <a>Moet & Chandon Brut NV</a><span>$120.00</span>
            </div>
            <div class="menu-ingredients">
              (Reims, France)
            </div>            
            <div class="menu-content">
              <a>T Gallant NV Prosecco</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Mornington, VIC)
            </div>            
            <div class="menu-content">
              <a>Squealing Pig Sparkling Rose</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Marlborough, NZ)
            </div>            
            <div class="menu-content">
              <a>Emeri Sparkling Rose Moscato</a><span>$11.00/$52.00</span>
            </div>
            <div class="menu-ingredients">
              (Aus.)
            </div>            
            <div class="menu-content">
              <a>Morgans Bay Sparkling</a><span>$10.00/$47.00</span>
            </div>
            <div class="menu-ingredients">
              (SA)
            </div> <br>
            <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: larger; color: maroon"><a >Rose</a><span>150ml/Bottle</span></div>                            
            <div class="menu-content">
              <a>Squealing Pig Rose</a><span>$13.00/$62.00</span>
            </div>
            <div class="menu-ingredients">
              (Marlborough, NZ)
            </div>            
            <div class="menu-content">
              <a>Fat Bird Rose</a><span>$12.00/$57.00</span>
            </div>
            <div class="menu-ingredients">
              (SA)
            </div> <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Mocktail</p>    
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Mocktail")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>         
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Cold Beverage</p> 
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Cold Beverage")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Juice</p> 
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Juice")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Coffee</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Coffee")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach <br>
            <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Tea</p>
            @foreach($menuitems as $menu)
            @if($menu->submenu == "Tea")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach 
          </div>
          <!-- End of Drinks Menu -->
          
          <!-- Kids Menu -->
            <div class="col-lg-12 menu-item filter-kids">
              <br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Kids Menu - $14</p>
              <p style="text-align: center;">"All Kids Menu Comes With Icecream"</p>
              @foreach($menuitems as $menu)
            @if($menu->submenu == "kids")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach 
          </div>
          <!-- Set Menu -->
            <div class="col-lg-12 menu-item filter-set">
              <br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Set Menu </p>
              <p style="text-align: center;"><strong>"$55 per person (Bookings needed 48 hours prior)"</strong></p>
              <p style="text-align: center;"><strong>3 Course</strong></p>
              <p style="text-align: center;"><strong>Minimum of 6 people</strong></p>
              <br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Entree </p>
              <p style="font-weight: bold; font-size: medium; color: black;">Mushroom Aranchini Balls</p>
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">Crispy, golden risotto balls filled with
                mushrooms,a savory blend
                of cheese and herbs. Served with remasco
                sauce.</p> 
              <p style="font-weight: bold; font-size: medium; color: black;">Spicy Chicken Chilly</p>   
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Tender flour coated chicken stir-fried with
                onions and vibrant capsicum, all tossed in a
                flavorful chili sauce.</p>          
             
              <p style="font-weight: bold; font-size: medium; color: black;">Garden Salad</p>
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Mixed leaves, tomato wedges, cucumber, carrot, onion
                tossed with house dressing</p>   
              <br>
              <p><strong>"Sharing for the table"</strong></p>
              <br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Mains </p>
              <p><strong>"Any one selected by the Guest"</strong></p>
              <p style="font-weight: bold; font-size: medium; color: black;">Pan Seared Salmon Fillet</p>
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Perfectly seasoned & buttered grilled Salmon
                served with mash, broccolini, fresh lemon
                and Chimichurri sauce.</p>   
              
              <p style="font-weight: bold; font-size: medium; color: black;">Rump Steak</p> 
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Beef rump Riverian angus- 250 gm with chat
                potatoes and seasonal veg Choice of sauce.</p> 
              
              <p style="font-weight: bold; font-size: medium; color: black;">Gurkhas Styled Momo/Dumplings</p>
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Steamed dumplings filled with a flavorful mixture
                of seasoned buffalo meats . Served with a side of
                house made dipping sauce.</p> 
              <p style="font-weight: bold; font-size: medium; color: black;">Curry & Rice</p>
              <p style="font-style: bold; font-size: 14px; font-family: 'Comic Neue', sans-serif; color:black;">
                Curry & Rice.</p> 
              <p style="font-weight: bold; font-size: medium; color: black;">Keema Noodles</p>
              <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Dessert </p>
                <p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;"><strong>"Chef Selection"</strong></p>
                <p style="text-align: center;font-weight: bold; font-size: larger; color: black;"><strong>One Per Person</strong></p>
          </div>
          <!-- Happy Hour Menu -->
            <div class="col-lg-12 menu-item filter-happy">
              <br><br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Happy Hour </p>
              <p style="text-align: center;"><strong>"Happy Hour every day 3pm to 6pm"</strong></p><br>
              <p><strong>Tap Beer</strong></p>
              <div class="menu-content">
                <a>Great Northen</a><span>$10.00 pint</span>
              </div>              
              <div class="menu-content">
                <a>Bottle beer of the day</a><span>$7.00</span>
              </div><br><br>
              <p><strong>Red Wine</strong></p>              
              <div class="menu-content">
                <a>Morgan's Bay Shiraz</a><span>$7.00</span>
              </div>
              <br><br>
              <p><strong>White Wine</strong></p>
              <div class="menu-content">
                <a>Morgan's Bay Sauvignon Blanc</a><span>$7.00</span>
              </div><br><br>
              <p><strong>Sparkling Wine</strong></p>              
              <div class="menu-content">
                <a>Morgan's Bay Sparkling Brut</a><span>$7.00</span>
              </div>
              <br><br>
              <p><strong>Hard Drinks</strong></p>
              @foreach($menuitems as $menu)
            @if($menu->submenu == "Hard Drinks")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach           
              <br><p style="text-align: center;font-weight: bold; font-size: larger; color: maroon;">Food </p>
              @foreach($menuitems as $menu)
            @if($menu->submenu == "Food")
            <div class="menu-content">
              <a >{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->description}}              
            </div>
            @endif
            @endforeach 
          </div>
        </div>        
      </div>
    </section>