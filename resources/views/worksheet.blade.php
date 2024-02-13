<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worksheet</title>
</head>
<body>
    <h2>Step 1: get the value of x</h2>
    <table border="1">
        <thead>
            <th></th>
            <th>Square</th>
            <th>Circle</th>
            <th>Triangle</th>
            <th>Star</th>
        </thead>
        <tbody>
            <tr>
                <th>x</th>
                <td>{{ $data['r'] }}</td>
                <td>{{ $data['c'] }}</td>
                <td>{{ $data['t'] }}</td>
                <td>{{ $data['s'] }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Step 2: Calculate the mean of x values</h2>
    <p>
      mean =  (<?php echo $data['r']. " + ". $data['c']. " + ". $data['t']. " + ". $data['s'];  ?>) / 4
    </p>
    <p>
        Mean(x) = {{ $data['mean']}}
    </p>
    <?php $mean = $data['mean']; ?>

    <h2>Step 3: calculate the mean difference of x values</h2>

    <p>{{ $data['r'] }}  -  {{ $mean }}  =  {{ $data['r'] + $mean }}</p>
    <p>{{ $data['c'] }}  -  {{ $mean }}  =  {{ $data['c'] + $mean }}</p>
    <p>{{ $data['t'] }}  -  {{ $mean }}  =  {{ $data['t'] + $mean }}</p>
    <p>{{ $data['s'] }}  -  {{ $mean }}  =  {{ $data['s'] + $mean }}</p>


    <h2>Step 4: calculate the mean difference squares</h2>

    <p>{{ $data['r'] + $mean }}<sup>2</sup>  =  {{ ($data['r'] + $mean) * ($data['r'] + $mean) }}</p>
    <p>{{ $data['c'] + $mean }}<sup>2</sup>  =  {{ ($data['c'] + $mean) * ($data['c'] + $mean) }}</p>
    <p>{{ $data['t'] + $mean }}<sup>2</sup>  =  {{ ($data['t'] + $mean) * ($data['t'] + $mean) }}</p>
    <p>{{ $data['s'] + $mean }}<sup>2</sup>  =  {{ ($data['s'] + $mean) * ($data['s'] + $mean) }}</p>

    <h2>Step 5: calculate the total squares difference (Variance)</h2>

    <?php $total = (($data['r'] + $mean) * ($data['r'] + $mean)) + (($data['c'] + $mean) * ($data['c'] + $mean)) + (($data['t'] + $mean) * ($data['t'] + $mean)) + (($data['s'] + $mean) * ($data['s'] + $mean)); ?>
    <p>{{ ($data['r'] + $mean) * ($data['r'] + $mean) }} + {{ ($data['c'] + $mean) * ($data['c'] + $mean) }} + {{ ($data['t'] + $mean) * ($data['t'] + $mean) }} + {{ ($data['s'] + $mean) * ($data['s'] + $mean) }} = {{ $total }}</p>

    <h2>Step 6: calculate the average of the total</h2>

    <p>Variance: {{ $total }} / 4 = {{($total / 4)}}</p>

    <h2>Step 7: calculate the square root of the variance (Standard Deviation)</h2>
    <p>
        S.D: √{{($total / 4)}} = {{ sqrt($total / 4)}}
    </p>
</body>
</html>