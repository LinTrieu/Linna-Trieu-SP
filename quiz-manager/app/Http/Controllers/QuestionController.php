<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class QuestionController extends Controller
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->middleware('auth');
        $this->question = $question;
    }

    /**
     * Displays questions by quiz id
     *
     * @param int $quizId
     * @return View
     */
    protected function index(int $quizId): View {
        $permissionLevel = Auth::user()->permission_level;
        $questions = $this->question->all();

        $questionsByQuizId = $questions->where('quiz_id', $quizId);
        return view('quiz.quiz', array('questions' => $questionsByQuizId, 'permissionLevel' => $permissionLevel, 'quizId'=>$quizId));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Question  $question
     * @return Response
     */
    public function show(Question $question): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Question  $question
     * @return Response
     */
    public function edit(Question $question): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param Question  $question
     * @return Response
     */
    public function update(Request $request, Question $question): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Question  $question
     * @return Response
     */
    public function destroy(Question $question): Response
    {
        //
    }
}
