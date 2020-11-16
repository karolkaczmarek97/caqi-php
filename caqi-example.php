<?php
//This example is to show how to calculate CAQI (Common Air Quality Index) value in PHP
//In order to get the final result, you have to calculate it's value
//for chosen pollutants and choose the worst (highest one)
//More info: http://www.airqualitynow.eu/about_indices_definition.php

//Function to calculate CAQI index for given pollutant concentration
function caqi($measurement, $pollutant)
{
    $level1 = 25;
    $level2 = 50;
    $level3 = 75;
    $level4 = 100;

    if ('PM10' == $pollutant)
    {
        $concentration1 = 25;
        $concentration2 = 50;
        $concentration3 = 90;
        $concentration4 = 180;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    if ('PM2.5' == $pollutant)
    {
        $concentration1 = 15;
        $concentration2 = 30;
        $concentration3 = 55;
        $concentration4 = 110;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    if ('NO2' == $pollutant)
    {
        $concentration1 = 50;
        $concentration2 = 100;
        $concentration3 = 200;
        $concentration4 = 400;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    if ('O3' == $pollutant)
    {
        $concentration1 = 60;
        $concentration2 = 120;
        $concentration3 = 180;
        $concentration4 = 240;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    if ('SO2' == $pollutant)
    {
        $concentration1 = 50;
        $concentration2 = 100;
        $concentration3 = 350;
        $concentration4 = 500;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    if ('CO' == $pollutant)
    {
        $concentration1 = 5000;
        $concentration2 = 7500;
        $concentration3 = 10000;
        $concentration4 = 20000;
        if ($measurement >= 0 && $measurement <= $concentration1)
        {
            $caqiIndex = (($level1 - 0) / ($concentration1 - 0)) * ($measurement - 0) + 0;
        }
        else
        {
            if ($measurement > $concentration1 && $measurement <= $concentration2)
            {
                $caqiIndex = (($level2 - $level1) / ($concentration2 - $concentration1)) * ($measurement - $concentration1) + $level1;
            }
            else
            {
                if ($measurement > $concentration2 && $measurement <= $concentration3)
                {
                    $caqiIndex = (($level3 - $level2) / ($concentration3 - $concentration2)) * ($measurement - $concentration2) + $level2;
                }
                else
                {
                    if ($measurement > $concentration3 && $measurement <= $concentration4)
                    {
                        $caqiIndex = (($level4 - $level3) / ($concentration4 - $concentration3)) * ($measurement - $concentration3) + $level3;
                    }
                    else
                    {
                        if ($measurement > $concentration4)
                        {
                            $caqiIndex = '>100';
                        }
                    }
                }
            }
        }
    }

    return $caqiIndex;
}

//Now for measured pollutant concentrations
$PM10concentration = 117; // [ug/m^3]
$PM2d5concentration = 77; // PM2d5 means PM2.5
$NO2concentration = 33;
$COconcentration = 873;
$SO2concentration = 48;
$O3concentration = 0;

//You can calculate subindexes
$PM10CAQI = caqi($PM10concentration, 'PM10');
$PM2d5CAQI = caqi($PM2d5concentration, 'PM2.5');
$NO2CAQI = caqi($NO2concentration, 'NO2');
$COCAQI = caqi($COconcentration, 'CO');
$SO2CAQI = caqi($SO2concentration, 'SO2');
$O3CAQI = caqi($O3concentration, 'O3');

//Round values if they are numeric (not '>100') or return string
function round_if_numeric($x)
{
    if (is_numeric($x))
    {
        $y = round($x, 0);
    }
    else
    {
        $y = $x;
    }
    return $y;
}

//And show results
echo '<h3>Measurements and CAQI values</h3>';
echo 'PM10:  ' . $PM10concentration . ' [ug/m^3] CAQI: ' . round_if_numeric($PM10CAQI) . '<br>';
echo 'PM2.5: ' . $PM2d5concentration . ' [ug/m^3] CAQI: ' . round_if_numeric($PM2d5CAQI) . '<br>';
echo 'NO2:   ' . $NO2concentration . ' [ug/m^3] CAQI: ' . round_if_numeric($NO2CAQI) . '<br>';
echo 'CO:    ' . $COconcentration . ' [ug/m^3] CAQI: ' . round_if_numeric($COCAQI) . '<br>';
echo 'SO2:   ' . $SO2concentration . ' [ug/m^3] CAQI: ' . round_if_numeric($SO2CAQI) . '<br>';
echo 'O3:    ' . $O3concentration . ' [ug/m^3] CAQI: ' . round_if_numeric($O3CAQI) . '<br>';

//You can write your results as array
$caqiValues = [$PM10CAQI, $PM2d5CAQI, $NO2CAQI, $COCAQI, $SO2CAQI, $O3CAQI];

//And show final result
function caqiFinalValue($arrayOfValues)
{
    $finalValueOfCaqiIndex = max($arrayOfValues);
    foreach ($arrayOfValues as $x)
    {
        if (!is_numeric($x) && $x == '>100')
        {
            $finalValueOfCaqiIndex = '>100';
        }
    }
    return $finalValueOfCaqiIndex;
}

echo '<h3>CAQI: ' . round_if_numeric(caqiFinalValue($caqiValues)) . '</h3>';

//You can also assign qualitative name
function caqiName($caqiValue)
{
    if (is_numeric($caqiValue) && $caqiValue <= 25)
    {
        $qualitativeName = 'Very low';
    }
    else
    {
        if (is_numeric($caqiValue) && $caqiValue <= 50)
        {
            $qualitativeName = 'Low';
        }
        else
        {
            if (is_numeric($caqiValue) && $caqiValue <= 75)
            {
                $qualitativeName = 'Moderate';
            }
            else
            {
                if (is_numeric($caqiValue) && $caqiValue <= 100)
                {
                    $qualitativeName = 'High';
                }
                else
                {
                    if (!is_numeric($caqiValue) || $caqiValue > 100 || $caqiValue == '>100')
                    {
                        $qualitativeName = 'Very high';
                    }
                    else
                    {
                        $qualitativeName = 'Cannot evaluate';
                    }
                }
            }
        }
    }
    return $qualitativeName;
}

//And show it
echo '<h3>' . caqiName(caqiFinalValue($caqiValues)) . ' pollution</h3>';

?>
