<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GridController extends Controller
{
    
    /**
     * Display the grid view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $shapesNumber = $this->generateShapes();

        Session::start();

        return view('grid', ['shapesNumber' => $shapesNumber[0], 'Shapes' => $shapesNumber[1]]);
    }

    public function mission2(Request $request)
    {
        Session::put('shapesNumber', $request->shapesNumber);
        $shapesNumber = json_decode($request->shapesNumber, true);
        $Shapes = json_decode($request->Shapes, true);
        return view('mission2', ['shapesNumber' => $shapesNumber, 'Shapes' => $Shapes]);
    }

    private function generateShapes(){
        
        $totalSum = 42;
        $numVariables = 4;

        $shapeNames = ['circle', 'square', 'triangle', 'star'];

        $variables = [];
        $remainingSum = $totalSum;

        // Generate values for the first 3 variables, ensuring their sum is less than 42
        for ($i = 0; $i < $numVariables - 1; $i++) {
            $randomValue = rand(1, $remainingSum - ($numVariables - $i - 1));
            $variables[$shapeNames[$i]] = $randomValue;
            $remainingSum -= $randomValue;
        }
        // Assign the remaining sum to the last variable
        $variables[$shapeNames[3]] = $remainingSum;

        // Generate a random shape for each variable
        $totalShapesKeys = $this->generateshapeForEachVariable($variables);

        // Return the variables and the total shapes
        return [$variables, $totalShapesKeys];
    }

    /**
     * Generates a random shape for each variable
     * and returns an array of all the shapes
     *
     * @param array $variables
     * @return array
     */
    private function generateshapeForEachVariable($variables){
        $shapes = [];
        foreach ($variables as $key => $value) {
            for ($i = 0; $i < $value; $i++) {
                array_push($shapes, $key);
            }
        }
        // Shuffle the array to randomize the shapes
        shuffle($shapes);

        // insert in the shapes array 'block' shape at index 6, 13, 20, 27, 34, 41, 48 and shift the rest of the array
        $shapes = $this->insertBlockShape($shapes);


        return $shapes;
    }

    /**
     * insert in the shapes array 'block' shape at index 6, 13, 20, 27, 34, 41, 48 and shift the rest of the array
     *
     * @param array $shapes
     * @return array
     */
    private function insertBlockShape($shapes){
        $blockShape = 'block';
        $blockShapeIndex = 3;
        $blockShapeIndex2 = 10;
        $blockShapeIndex3 = 17;
        $blockShapeIndex4 = 24;
        $blockShapeIndex5 = 31;
        $blockShapeIndex6 = 38;
        $blockShapeIndex7 = 45;

        array_splice($shapes, $blockShapeIndex, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex2, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex3, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex4, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex5, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex6, 0, $blockShape);
        array_splice($shapes, $blockShapeIndex7, 0, $blockShape);

        return $shapes;
    }

}
