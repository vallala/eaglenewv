@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
      </table>
    </div>
    <div class="container">
        <h1>Stocks</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Symbol</th>
                <th>Name</th>
                <th>Shares</th>
                <th>Purchase price</th>
                <th>Purchase Date</th>
                <th>Original Value</th>
                <th>Recent Price</th>
                <th>Recent Value</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customer->stocks as $stock)
                <tr>
                    <td>{{ $stock->symbol }}</td>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->shares }}</td>
                    <td>{{ $stock->purchase_price }}</td>
                    <td>{{ $stock->purchased }}</td>
                    <td> <?php echo "$" ?> {{ $stock->shares * $stock->purchase_price}}</td>
                    <td>{{ $stock->current_price }}</td>
                    <td> <?php echo "$" ?> {{ $stock->shares * $stock->current_price}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <?php $total = 0;$totalr=0; ?>
        @foreach ($customer->stocks as $stock)
            <?php $total = $total + ($stock->shares * $stock->purchase_price) ?>
        @endforeach
        @foreach ($customer->stocks as $stock)
            <?php $totalr = $totalr + ($stock->shares * $stock->current_price) ?>
        @endforeach
        <p style="font-size:25px;">Total of Initial Stock Portfoilo : <?php echo "$" . $total ?></p>
        <p style="font-size:25px;">Total of Current Stock Portfoilo : <?php echo "$" . $totalr ?></p>
        <br></br>


        <h1>Investments</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Category</th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Recent Value</th>
                <th>Recent Date</th>
            </tr>
            </thead>


            <tbody>

            @foreach ($customer->investments as $investment)
                <tr>
                    <td>{{ $investment->category }}</td>
                    <td>{{ $investment->description }}</td>
                    <td>{{ $investment->acquired_value }}</td>
                    <td>{{ $investment->acquired_date }}</td>
                    <td>{{ $investment->recent_value }}</td>
                    <td>{{ $investment->recent_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <?php $total_1 = 0; ?>
        @foreach ($customer->investments as $investment)
            <?php $total_1 = $total_1 + $investment->acquired_value ?>
        @endforeach
        <p style="font-size:25px;"> Total of Initial Investment Portfoilo : <?php echo "$" . $total_1 ?> </p>
        <?php $total_2=0; ?>
        @foreach ($customer->investments as $investment)
            <?php $total_2 = $total_2 + $investment->recent_value ?>
        @endforeach
        <p style="font-size:25px;"> Total of Current Investment Portfoilo : <?php echo "$" . $total_2 ?></p>
        <br></br>


        <h1>Assets</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Category</th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Asset Type</th>
                <th>Salvage Value</th>
            </tr>

            <tbody>
            @foreach ($customer->assets as $asset)
                <tr>
                    <td>{{ $asset->category }}</td>
                    <td>{{ $asset->description }}</td>
                    <td>{{ $asset->acquired_value }}</td>
                    <td>{{ $asset->acquired_date }}</td>
                    <td>{{ $asset->asset_type }}</td>
                    <td>{{ $asset->salvage_value }}</td>
                </tr>
                @endforeach
                </tbody>
        </table>

        <?php $total_3=0; ?>
        @foreach ($customer->assets as $asset)
            <?php $total_3 = $total_3 + $asset->acquired_value ?>
        @endforeach
        <?php $total_4=0; ?>
        @foreach ($customer->assets as $asset)
            <?php $total_4 = $total_4 + $asset->salvage_value ?>
        @endforeach
        <p style="font-size:25px;"> Total of Acquired Assets : <?php echo "$" . $total_3 ?></p>
        <p style="font-size:25px;"> Total of Current Assets : <?php echo "$" . $total_4 ?></p>
        <br></br>

        <h2 style="font-size:40px"> Summary Portfoilo</h2>
        <p style="font-size:25px;"> Total of Initial Portfoilo Value : <?php $sumtot1 = $total + $total_1;echo "$".$sumtot1 ?></p>
        <p style="font-size:25px;"> Total of Current Portfoilo : <?php $sumtot2 = $totalr + $total_2;echo "$".$sumtot2 ?></p>
        <p style="font-size:25px;"> Total of Acquired Assets : <?php echo "$" . $total_3 ?></p>
        <p style="font-size:25px;"> Total of Current Assets : <?php echo "$" . $total_4 ?></p>







    </div>

@stop