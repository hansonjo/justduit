<div class="sidebar">
    <a href="/">View All Shoe</a>
    @if(Auth::User() && Auth::User()->role == 'member')
    <a href="/viewcart">View Cart</a>
    <a href="/viewtransaction">View Transaction</a>
    @elseif(Auth::User() && Auth::User()->role == 'admin')
    <a href="/addshoe">Add Shoe</a>
    <a href="/viewalltransaction">View All Transaction</a>
    @endif
</div>