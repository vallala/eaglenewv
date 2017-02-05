@extends('app')
@section('content')
    <h1>Asset </h1>
    <div class="container">
<table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Category</td>
                <td><?php echo ($asset['category']); ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo ($asset['description']); ?></td>
            </tr>
            <tr>
                <td>Acquired Value</td>
                <td><?php echo ($asset['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date </td>
                <td><?php echo ($asset['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Asset Type</td>
                <td><?php echo ($asset['asset_type']); ?></td>
            </tr>
			<tr>
                <td>Salvage Value</td>
                <td><?php echo ($asset['salvage_value']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop