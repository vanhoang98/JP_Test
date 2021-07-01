<?php

namespace App\Http\Controllers;

use App\Question;
use App\Test;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($id)
    {
        if (session('success_title')) {
            toast(session('success_title'), 'success');
        }

        $test = Test::with('round')->where('id', $id)->first();
        $questions = Question::where('test_id', $id)->latest()->get();

        return view("backend.question.list", compact(['questions','id', 'test']));
    }

    public function getList()
    {
        $questions = Question::with('test')->latest()->get();

        return view("backend.question.all_list", compact('questions'));
    }

    public function getAdd($id)
    {
        if (session('error_title')) {
            toast(session('error_title'), 'error');
        }
        
        return view("backend.question.add", compact('id'));
    }

    public function postAdd(Request  $request, $id)
    {
        $isset_question = Question::where('name', $request->name)->count();
        if ($isset_question > 0)
        {
            return redirect()->back()->withErrorTitle('Câu hỏi này đã tồn tại trong hệ thống');

        } else {
            $question = new Question();
            $question->name = $request->name;
            $question->test_id = $id;
            $question->answera = $request->answera;
            $question->answerb = $request->answerb;
            $question->answerc = $request->answerc;
            $question->answerd = $request->answerd;
            $question->answer_true = $request->answer_true;
    
            $question->save();
    
            return redirect()->route('question.list', $id)->withSuccessTitle('Thêm câu hỏi mới thành công');
        }
    }

    public function getEdit($id_test, $id)
    {
        $question =  Question::find($id);

        return view("backend.question.edit", compact('question','id_test'));
    }

    public function postEdit(Request $request, $id_test, $id)
    {
        $question =  Question::find($id);
        $question->name = $request->name;
        $question->answera = $request->answera;
        $question->answerb = $request->answerb;
        $question->answerc = $request->answerc;
        $question->answerd = $request->answerd;
        $question->answer_true = $request->answer_true;

        $question->save();

        return redirect()->route('question.list', $id_test)->withSuccessTitle('Sửa thông tin câu hỏi thành công');
    }

    public function getdel($id_test, $id)
    {
        $question =  Question::find($id);
        $question->delete();

        return redirect()->route('question.list', $id_test)->withSuccessTitle('Xóa câu hỏi thành công');
    }
}
