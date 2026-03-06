<h1>Transaction</h1>

<form method="POST" action="/transactions">
    @csrf
    <input type="text" name="description" placeholder="Description">
    <input type="number" name="amount" placeholder="Amount">
    <button type="submit">Add Transaction</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Description</th>
    <th>Amount</th>
</tr>

@foreach($transactions as $t)
<tr>
   <td>{{ $t->id }}</td>
    <td>{{ $t->description }}</td>
    <td>{{ $t->amount }}</td> 
</tr
@endforeach
</table>