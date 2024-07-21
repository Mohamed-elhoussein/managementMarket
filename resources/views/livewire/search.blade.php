
<div>
    <div class="main-menu-search">

        <div class="navbar-search search-style-5">
        <div class="search-select">
        <div class="select-position">
        <select id="select1">
        <option selected>All</option>
        <option value="1">option 01</option>
        <option value="2">option 02</option>
        <option value="3">option 03</option>
        <option value="4">option 04</option>
        <option value="5">option 05</option>
        </select>
        </div>
        </div>
        <div class="search-input"  >
        <input wire:model.live="data"  type="text" placeholder="search" >
        </div>
        <div class="search-btn">
        <button><i class="lni lni-search-alt"></i></button>
        </div>
        </div>

        </div>
    <ul>
        @if(!empty($data))

        @foreach ($search as $search )
        <li><a href="">  {{ $search->name }} </a></li>

        @endforeach

        @endif
    </ul>
        </div>




</div>
