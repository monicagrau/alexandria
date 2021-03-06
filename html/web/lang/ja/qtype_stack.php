<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_stack', language 'ja', branch 'MOODLE_26_STABLE'
 *
 * @package   qtype_stack
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanothernode'] = '新しいノードを追加する';
$string['addanothertestcase'] = '新しいテストケースを追加する';
$string['addatestcase'] = 'テストケースを追加する';
$string['addingatestcase'] = '問題{$a}にテストケースを追加する';
$string['alg_indices_fact'] = '以下は指数の法則です。
[a^ma^n = a^{m+n}] [frac{a^m}{a^n} = a^{m-n}] [(a^m)^n = a^{mn}] [a^0 = 1] [a^{-m} = frac{1}{a^m}] [a^{frac{1}{n}} = sqrt[n]{a}] [a^{frac{m}{n}} = left(sqrt[n]{a}right)^m]';
$string['alg_indices_name'] = '指数の法則';
$string['alg_inequalities_fact'] = '[a>b hbox{ ： } a hbox{ は } b hbox{ よりも大きい } ] <br /> [ a < b hbox{ ： } a hbox{ は } b hbox{ よりも小さい } ] <br /> [ageq b hbox{ ： } a hbox{ は } b hbox{ よりも大きいかまたは等しい } ] <br /> [aleq b hbox{ ： } a hbox{ は } b hbox{ よりも小さいかまたは等しい } ]';
$string['alg_inequalities_name'] = '不等式';
$string['alg_logarithms_fact'] = '任意の正の底 (b) (ただし (b neq 1))に対して [log_b(a) = c mbox{，あるいは } a = b^c] [log_b(a) + log_b(b) = log_b(ab)] [log_b(a) - log_b(b) = log_bleft(frac{a}{b}right)] [nlog_b(a) = log_bleft(a^nright)] [log_b(1) = 0] [log_b(b) = 1] 底の変換公式 [log_a(x) = frac{log_b(x)}{log_b(a)}] 底 $e$ の対数 $log_e$ あるいは $ln$ は自然対数と呼ばれる。$e$ は定数でおよそ 2.718 である。';
$string['alg_logarithms_name'] = '対数の法則';
$string['alg_partial_fractions_fact'] = '$P$ と $Q$ が多項式で，$P$ の次数が $Q$ の次数よりも小さい時，[{frac{P(x)}{Q(x)}}] は真分数となる。さらに，$Q(x)$ が因数分解でき，<ul>
<li><em>一次式の因子</em> $ax+b$ を使って次のような形式に書くことができる。 [{frac{A}{ax+b}}.] </li>
<li>あるいは<em>上記の二乗の因子</em> $(ax+b)^2$ を使って次のような形式に書くことができる。[{Aover ax+b}+{Bover (ax+b)^2}.] </li>
<li>また，<em>二次式の因子</em> $ax^2+bx+c$ を使って次のような形式に書くことができる。[{Ax+Bover ax^2+bx+c}] </li> さらに，<li> <em>仮分数</em> の場合は，$n-d$次の多項式の項が必要となる。ただし，$n$ は分子(i.e. $P(x)$) の次数であり，$d$ は分母 (ie $Q(x)$)の次数である。 </li>
</ul>';
$string['alg_partial_fractions_name'] = '部分分数';
$string['alg_quadratic_formula_fact'] = '二次方程式
[ ax^2 + bx +c =0 ]
の解は解の公式により
[ x = frac{-b pm sqrt{b^2-4ac}}{2a}]
となります。';
$string['alg_quadratic_formula_name'] = '二次方程式の解の公式';
$string['all'] = 'すべて';
$string['allnodefeedbackmustusethesameformat'] = 'ポテンシャル・レスポンス・ツリーの全てのノードのフィードバックは同じフォーマットで記述する必要があります。';
$string['allowwords'] = '許可されたワード';
$string['allowwords_help'] = 'デフォルトでは，3文字以上の関数名，変数名は許可されていません。これは解答に使用できる関数名，変数名のリストです。';
$string['answernote'] = '解答記録';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernote_err'] = '解答記録に「 | 」が含まれていません。解答記録を分割するために必要です。';
$string['answernote_help'] = 'これはレポートを目的としたタグで，ポテンシャル・レスポンス・ツリーのパスと各評価関数の出力を記録するように設計されています。これは自動的に生成されますが，目的に応じて変更できます。';
$string['answernoterequired'] = '解答記録は空欄のままではいけません';
$string['answertest'] = '評価関数';
$string['answertest_help'] = '評価関数は，数式がある条件をみたしているかどうかを判定するために用いられるものです。';
$string['assumepositive'] = '正の仮定';
$string['assumepositive_help'] = 'このオプションはMaximaのassume_posオプションの値を設定します。';
$string['ATAlgEquiv_SA_not_equation'] = '方程式を入力してください。';
$string['ATAlgEquiv_SA_not_expression'] = '解答は数式で行ってください。方程式，不等式，リスト，集合，また行列などは入力しないでください。';
$string['ATAlgEquiv_SA_not_function'] = '解答は<tt>:=</tt>の演算子で定義された関数を入力してください。';
$string['ATAlgEquiv_SA_not_inequality'] = '不等式を入力してください。';
$string['ATAlgEquiv_SA_not_list'] = 'リストを入力してください。リストは角括弧で囲まれたカンマ区切りの値で入力してください。例：[a, b, c]';
$string['ATAlgEquiv_SA_not_matrix'] = '行列を入力してください。';
$string['ATAlgEquiv_SA_not_set'] = '集合を入力してください。集合は波括弧で囲まれたカンマ区切りの値で入力してください。例：{a, b, c}';
$string['ATAlgEquiv_TA_not_equation'] = 'あなたの解答は方程式になっていますが，この問題は解答に方程式を要求していません。「y=2*x+1」のような解答の場合は「2*x+1」とだけ入力してください。';
$string['ATCompSquare_false_no_summands'] = '平方完成は$a, b#を定数として$a(cdots cdots)^2+b$の形式です。あなたの解答では，一つ以上の加数が変数に依存しているようです。';
$string['ATCompSquare_not_AlgEquiv'] = 'あなたの解答の書式は正しいようですが，正解ではありません。';
$string['ATCompSquare_SA_not_depend_var'] = '変数{$a->m0}に依存した解答を入力してください。';
$string['ATDiff_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATDiff_int'] = '間違って積分してませんか？';
$string['AT_EmptySA'] = '評価対象が空欄のまま評価関数を実行しました。問題作成時にCASの評価で問題が生じます。';
$string['AT_EmptyTA'] = '評価対象が空欄のまま評価基準を実行しました。問題作成時にCASの評価で問題が生じます。';
$string['ATFacForm_error_degreeSA'] = 'CASはあなたの解答を処理できませんでした。';
$string['ATFacForm_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATFacForm_isfactored'] = '形式的には因数分解できています。';
$string['ATFacForm_notalgequiv'] = 'あなたの解答は正答と代数的に等価ではありません。どこか計算間違いをしていませんか？';
$string['ATFacForm_notfactored'] = 'あなたの解答は因数分解されていません。';
$string['ATInequality_backwards'] = '不等式が反対になっていませんか？';
$string['ATInequality_nonstrict'] = 'この問題の不等号は「＜」か「＞」である必要があります。';
$string['ATInequality_strict'] = 'この問題の不等号は「≤」か「≥」である必要があります。';
$string['ATInt_const'] = '積分定数を忘れていませんか？積分定数を追加すれば正解です。';
$string['ATInt_const_int'] = '積分定数がありません。積分定数は数値ではなく任意の定数である必要があります。';
$string['ATInt_diff'] = '間違って微分してませんか？';
$string['ATInt_EqFormalDiff'] = 'あなたの解答を微分すると，問題の非積分関数と確かに一致します。ところが，例えば，積分定数がない，などの意味で正解と異なっています。';
$string['ATInt_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATInt_generic'] = 'あなたの解答を微分したものは，積分すべき数式に一致しなければなりません。あなたの解答を{a->m1}で微分すると{$a->m2}になります。これは{a->m0}に一致しません。';
$string['ATInt_logabs'] = 'あなたの解答を形式的に微分すると，確かに積分すべき数式に一致します。しかし，あなたの解答は，次の理由で正解ではありません。$int frac{1}{x}dx=log (x) +c$ではなく，$int frac{1}{x}dx=log (|x|) +c$であることに注意してください。詳しくは教師にたずねてください。';
$string['ATInt_logabs_inconsistent'] = '$log ( cdos )$と$log ( |cdos| )$の使い方に間違いがあるようです。詳しくは教師にたずねてください。';
$string['ATInt_weirdconst'] = 'あなたの解答を形式的に微分すると，確かに積分すべき数式に一致します。しかし，不適切な積分定数が含まれています。詳しくは教師にたずねてください。';
$string['AT_InvalidOptions'] = 'オプションのフィールドが正しくありません。 {$a->errors}';
$string['ATList_wrongentries'] = '赤字で示された部分が不正解です。{$a->m0}';
$string['ATList_wronglen'] = 'あなたの解のリストは {a->m1} 個の要素が含まれていますが，{a->m0} 個の要素が含まれているべきです。';
$string['ATLowestTerms_entries'] = '以下の項は約分が十分ではありません。{$a->m0} もう一度よく確認してください。';
$string['ATLowestTerms_wrong'] = '解答中の分数を約分する必要があります。';
$string['ATMatrix_wrongentries'] = '赤字で示された部分が不正解です。{$a->m0}';
$string['ATMatrix_wrongsz'] = 'あなたの入力した行列は{a->m0}×{a->m1}ですが，正しくは{a->m2}×{a->m3}です。';
$string['AT_MissingOptions'] = '評価関数を実行するために必要なオプションがありません。';
$string['AT_NOTIMPLEMENTED'] = 'この評価関数はまだ実装されていません。';
$string['ATNumDecPlaces_NoDP'] = '解答は小数点を含む10進数でなければなりません。';
$string['ATNumDecPlaces_OptNotInt'] = '評価関数「小数部桁数」のオプションは正の整数でなければなりませんが，{$a->opt}になっています。';
$string['ATNumDecPlaces_Wrong_DPs'] = 'あなたの解答では小数点の位置が間違っています。';
$string['ATNumSigFigs_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATNumSigFigs_Inaccurate'] = 'あなたの解答の精度（桁数）が正しくありません。正しく四捨五入していないか，計算の途中で四捨五入して最終的な答えが間違いとなった可能性があります。';
$string['ATNumSigFigs_NotDecimal'] = '解答は10進数でなければなりません。';
$string['ATNumSigFigs_WrongDigits'] = 'あなたの解答の桁数が間違っています。';
$string['ATPartFrac_denom_ret'] = 'あなたの解答を単一の分数で記述すると分母は{a->m0}になります。正しくは{a->m1}です。';
$string['ATPartFrac_diff_variables'] = '解答の中の変数は，問題文の中の変数と異なっています。確認してください。';
$string['ATPartFrac_error_list'] = '評価関数が正常に動作しませんでした。サイト管理者に問い合わせてください。';
$string['ATPartFrac_ret_expression'] = 'あなたの解答を単一の分数で記述すると{$a->m0}になります。';
$string['ATPartFrac_single_fraction'] = 'あなたの解答は単一の分数で記述されています。この問題では部分分数の形で記述する必要があります。';
$string['ATRegEx_missing_option'] = '正規表現が含まれていません。';
$string['ATSet_wrongentries'] = '入力したものはより簡単な形になりますが，間違っています。';
$string['ATSet_wrongsz'] = '集合は{$a->m0}個の異なる要素が必要ですが，実際には {$a->m1}個の要素になっています。';
$string['ATSingleFrac_div'] = 'あなたの解答は分数の中に分数を含んでいます。一つの分数で解答を入力してください。';
$string['ATSingleFrac_error_list'] = '評価関数が正常に動作しませんでした。サイト管理者に問い合わせてください。';
$string['ATSingleFrac_part'] = '解答は$frac{a}{b}$の形式の一つの分数である必要があります。';
$string['ATSingleFrac_ret_exp'] = 'あなたの解答は正解と代数的に等しくありません。どこか計算間違いしていませんか？';
$string['ATSingleFrac_var'] = '解答の中の変数は，問題文の中の変数と異なっています。';
$string['ATSysEquiv_SA_extra_variables'] = '解答に含まれている変数が多すぎます。';
$string['ATSysEquiv_SA_missing_variables'] = 'あなたの解答には変数が足りません。';
$string['ATSysEquiv_SA_not_eq_list'] = '解答は方程式のリストでなければなりません。';
$string['ATSysEquiv_SA_not_list'] = '解答はリスト形式でなければなりません。';
$string['ATSysEquiv_SA_not_poly_eq_list'] = '方程式が多項式ではありません。';
$string['ATSysEquiv_SA_system_overdetermined'] = '赤で表示された要素が間違っているようです。{$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = '方程式は正しいようですが，それ以外にも必要です。';
$string['ATSysEquiv_SB_not_eq_list'] = '評価基準は方程式のリストではなければなりません。';
$string['ATSysEquiv_SB_not_list'] = '評価基準はリストではありません。';
$string['ATSysEquiv_SB_not_poly_eq_list'] = '評価基準は多項式のリストですが，そうなっていません。';
$string['autosimplify'] = '自動簡略化';
$string['autosimplify_help'] = 'Yesが指定されると，この問題（問題変数，問題文など）に対して，Maximaのsimp変数を設定します。各ポテンシャル・レスポンス・ツリーでこの変数が指定されると，それが優先されます。';
$string['autosimplifyprt'] = '自動簡略化';
$string['autosimplifyprt_help'] = 'このポテンシャル・レスポンス・ツリーのフィードバック変数に対して，Maximaのsimp変数を設定します。この設定は，他で指定されたsimp変数よりも優先されます。';
$string['booleangotunrecognisedvalue'] = '入力エラー';
$string['boxsize'] = '解答欄のサイズ';
$string['boxsize_help'] = '解答入力欄の大きさを設定します。';
$string['branchfeedback'] = 'ノード・フィードバック';
$string['branchfeedback_help'] = '問題変数，入力，フィードバック変数に依存したCASテキストで記述されます。解答がこの分岐を通過する場合，CASテキストが評価され学生に表示されます。';
$string['bulktestindexintro'] = 'どのリンクをクリックしても，全てのSTACKの問題のテストを実行します。';
$string['bulktestindexintro_desc'] = '<a href="{$a->link}">内部での問題実行スクリプト</a> は全てのSTACKの問題のテストを簡単に実行することができます。また，CASのキャッシュの再構築のための良い方法でもあります。';
$string['bulktestindextitle'] = '内部で問題のテストを実行';
$string['bulktestnotests'] = 'この問題はテストする必要がありません。';
$string['bulktesttitle'] = '{$a}で問題のテストが実行されています。';
$string['calc_chain_rule_fact'] = '次のようにして合成関数の微分を行うことができます。関数$f(g(x))$で$u=g(x)$と仮定することにより，$f(g(x))$を$x$で微分すると
[ frac{df(g(x))}{dx} = frac{dg(x)}{dx} cdot frac{df(u)}{du} ]
となります。あるいは，
[ frac{df(g(x))}{dx} = f\'(g(x)) cdot g\'(x)]
と書くこともできます。';
$string['calc_chain_rule_name'] = 'チェーンルール';
$string['calc_diff_linearity_rule_fact'] = '[
frac{d}{dx}(af(x)+bg(x)) = afrac{df(x)}{dx} + bfrac{dg(x)}{dx}
]
ただし，$a, b$は定数。';
$string['calc_diff_linearity_rule_name'] = '微分の線形性';
$string['calc_diff_standard_derivatives_fact'] = '次の表はいくつかの標準的な関数の微分を表示しています。計算にしばしば用いられるので，覚えておくと便利です。 <center> <table> <tr><th>(f(x)) </th><th> (f\'(x))</th></tr> <tr> <td>(k), constant </td> <td> (0) </td> </tr> <tr> <td> (x^n), any constant (n) </td> <td> (nx^{n-1})</td> </tr> <tr> <td> (e^x) </td> <td> (e^x)</td> </tr> <tr> <td> (ln(x)=log_{rm e}(x)) </td> <td> (frac{1}{x}) </td> </tr> <tr> <td> (sin(x)) </td> <td> (cos(x)) </td> </tr> <tr> <td> (cos(x)) </td> <td> (-sin(x)) </td> </tr> <tr> <td> (tan(x) = frac{sin(x)}{cos(x)}) </td> <td> (sec^2(x)) </td> </tr> <tr> <td> (cosec(x)=frac{1}{sin(x)}) </td> <td> (-cosec(x)cot(x)) </td> </tr> <tr> <td> (sec(x)=frac{1}{cos(x)}) </td> <td> (sec(x)tan(x)) </td> </tr> <tr> <td> (cot(x)=frac{cos(x)}{sin(x)}) </td> <td> (-cosec^2(x)) </td> </tr> <tr> <td> (cosh(x)) </td> <td> (sinh(x)) </td> </tr> <tr> <td> (sinh(x)) </td> <td> (cosh(x)) </td> </tr> <tr> <td> (tanh(x)) </td> <td> (sech^2(x)) </td> </tr> <tr> <td> (sech(x)) </td> <td> (-sech(x)tanh(x)) </td> </tr> <tr> <td> (cosech(x)) </td> <td> (-cosech(x)coth(x)) </td> </tr> <tr> <td> (coth(x)) </td> <td> (-cosech^2(x)) </td> </tr> </table> </center> [ frac{d}{dx}left(sin^{-1}(x)right) = frac{1}{sqrt{1-x^2}}] [ frac{d}{dx}left(cos^{-1}(x)right) = frac{-1}{sqrt{1-x^2}}] [ frac{d}{dx}left(tan^{-1}(x)right) = frac{1}{1+x^2}] [ frac{d}{dx}left(cosh^{-1}(x)right) = frac{1}{sqrt{x^2-1}}] [ frac{d}{dx}left(sinh^{-1}(x)right) = frac{1}{sqrt{x^2+1}}] [ frac{d}{dx}left(tanh^{-1}(x)right) = frac{1}{1-x^2}]';
$string['calc_diff_standard_derivatives_name'] = '標準的な微分';
$string['calc_int_linearity_rule_fact'] = '[int left(af(x)+bg(x)right){rm d}x = aint!!f(x),{rm d}x ,+,bint !!g(x),{rm d}x, quad (a,b , , mbox{定数} )]';
$string['calc_int_linearity_rule_name'] = '積分の線形性';
$string['calc_int_methods_parts_fact'] = '[ int_a^b u{{rm d}vover {rm d}x}{rm d}x=left[uvright]_a^b- int_a^b{{rm d}uover {rm d}x}v,{rm d}x ] あるいは [int_a^bf(x)g(x),{rm d}x=left[f(x),int g(x){rm d}xright]_a^b -int_a^b{{rm d}fover {rm d}x}left{int g(x){rm d}xright}{rm d}x ]';
$string['calc_int_methods_parts_name'] = '部分積分';
$string['calc_int_methods_substitution_fact'] = '[ int f(u){{rm d}uover {rm d}x}{rm d}x=int f(u){rm d}u quadhbox{および}quad int_a^bf(u){{rm d}uover {rm d}x},{rm d}x = int_{u(a)}^{u(b)}f(u){rm d}u ]';
$string['calc_int_methods_substitution_name'] = '置換積分';
$string['calc_int_standard_integrals_fact'] = '[int k dx = kx +c, mbox{ ただし}  k mbox{は定数}] [int x^n dx = frac{x^{n+1}}{n+1}+c, quad (nne -1)] [int x^{-1} dx = int {frac{1}{x}} dx = ln(|x|)+c = ln(k*|x|) = left{matrix{ln(x)+c & x>0cr ln(-x)+c & x<0cr}right.] <center> <table> <tr><th>(f(x))</th><th> (int f(x) dx)</th></tr> <tr><td>(e^x) </td> <td> (e^x+c)</td> <td> </td> </tr> <tr><td>(cos(x)) </td> <td> (sin(x)+c) </td> <td> </td> </tr> <tr><td>(sin(x)) </td> <td> (-cos(x)+c) </td> <td> </td> </tr> <tr><td>(tan(x)) </td> <td> (ln(sec(x))+c) </td> <td>(-frac{pi}{2} < x < frac{pi}{2})</td> </tr> <tr><td>(sec x) </td> <td> (ln (sec(x)+tan(x))+c) </td> <td> ( -{piover 2}< x < {piover 2})</td> </tr> <tr><td>cosec(, x) </td> <td> (ln ($cosec$(x)-cot(x))+c) </td> <td>(0 < x < pi)</td> </tr> <tr><td>cot(,x) </td> <td> (ln(sin(x))+c) </td> <td> (0< x< pi) </td> </tr> <tr><td>(cosh(x)) </td> <td> (sinh(x)+c)</td> <td></td> </tr> <tr><td>(sinh(x)) </td> <td> (cosh(x) + c) </td> <td> </td> </tr> <tr><td>(tanh(x)) </td> <td> (ln(cosh(x))+c)</td> <td> </td> </tr> <tr><td>coth((x)) </td> <td> (ln(sinh(x))+c )</td> <td> (x>0)</td> </tr> <tr><td>({1over x^2+a^2}) </td> <td> ({1over a}tan^{-1}{xover a}+c)</td> <td> (a>0)</td> </tr> <tr><td>({1over x^2-a^2}) </td> <td> ({1over 2a}ln{x-aover x+a}+c) </td> <td> (|x|>a>0)</td> </tr> <tr><td>({1over a^2-x^2}) </td> <td> ({1over 2a}ln{a+xover a-x}+c) </td> <td> (|x|<a)</td> </tr> <tr><td>({1over sqrt{x^2+a^2}}) </td> <td> (sinh^{-1}left(frac{x}{a}right) + c) </td> <td> (a>0) </td> </tr> <tr><td>({1over sqrt{x^2-a^2}}) </td> <td> (cosh^{-1}left(frac{x}{a}right) + c) </td> <td (xgeq a > 0) </td> </tr> <tr><td>({1over sqrt{x^2+k}}) </td> <td> (ln (x+sqrt{x^2+k})+c)</td> <td> </td> </tr> <tr><td>({1over sqrt{a^2-x^2}}) </td> <td> (sin^{-1}left(frac{x}{a}right)+c)</td> <td> (-aleq xleq a) </td> </tr> </table></center>';
$string['calc_int_standard_integrals_name'] = '標準的な積分';
$string['calc_product_rule_fact'] = '関数の積の微分の法則を示します。 (f(x)g(x)) を (x) で微分する場合次のようになります。 [ frac{mathrm{d}}{mathrm{d}{x}} big(f(x)g(x)big) = f(x) cdot frac{mathrm{d} g(x)}{mathrm{d}{x}} + g(x)cdot frac{mathrm{d} f(x)}{mathrm{d}{x}},] あるいは別の表記で [ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). ]';
$string['calc_product_rule_name'] = '積法則';
$string['calc_quotient_rule_fact'] = '微分可能な関数 (f(x)) と (g(x))に対する微分の商法則は次のとおりです。 [frac{d}{dx}left(frac{f(x)}{g(x)}right)=frac{g(x)cdotfrac{df(x)}{dx}  -   f(x)cdot frac{dg(x)}{dx}}{g(x)^2}. ]';
$string['calc_quotient_rule_name'] = '商法則';
$string['calc_rules_fact'] = '<b>微分の積法則</b><br /> (f(x)g(x)) を (x) で微分する場合，関数の積の微分の法則は次のようになります。[ frac{mathrm{d}}{mathrm{d}{x}} big(f(x)g(x)big) = f(x) cdot frac{mathrm{d} g(x)}{mathrm{d}{x}} + g(x)cdot frac{mathrm{d} f(x)}{mathrm{d}{x}},] あるいは別の表記で [ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). ] <b>微分の商法則</b><br />微分可能な関数 (f(x)) と (g(x))に対する微分の商法則は次のとおりです。 [frac{d}{dx}left(frac{f(x)}{g(x)}right)=frac{g(x)cdotfrac{df(x)}{dx}  -   f(x)cdot frac{dg(x)}{dx}}{g(x)^2}. ] <b>チェーンルール</b><br />2つの関数で構成される関数の微分は次のようになります。(u=g(x)) とおくことにより，関数 (f(g(x))) の (x) に関する微分は次のようになります。 [frac{df(g(x))}{dx} = frac{dg(x)}{dx}cdotfrac{df(u)}{du}.] あるいは別の表記で [frac{df(x)}{dx} = f\'(g(x))cdot g\'(x).]';
$string['calc_rules_name'] = '計算の法則';
$string['casdisplay'] = 'CAS表示';
$string['cassuitecolerrors'] = 'CASエラー';
$string['castext'] = 'CASテキスト';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = 'CASは不一致と判定しています';
$string['casvalue'] = 'CASの値';
$string['chat'] = 'CASに送信する';
$string['chat_desc'] = '<a href="{$a->link}">CASチャットのスクリプト</a>により，CASとの接続を確認し，Maximaの文法を試すことができます。';
$string['chatintro'] = 'このページではCASテキストの動作確認を行うことができます。「問題変数」のテキストボックスで変数の定義を行い（これは省略できます），「CASテキスト」のテキストボックスにCASテキストを入力します。例：問題変数に「a:x^3」，CASテキストに「@a@を@x@で微分すると@diff(a,x)@となります」';
$string['chattitle'] = 'CASへの接続を確認します';
$string['checkanswertype'] = '解答形式の確認';
$string['checkanswertype_help'] = 'Yesが指定されると，解答形式として指定された形式と異なる形式の解答が提示された場合，解答が受け付けられません。';
$string['clearthecache'] = 'キャッシュを削除する';
$string['completetestcase'] = 'テストケースをパスするために残りのフォームに入力してください。';
$string['complexno'] = '虚数単位の表記';
$string['complexno_help'] = '記号iとsqrt(-1)の意味と表記を指定します。';
$string['createtestcase'] = 'テストケースを作成する';
$string['currentlyselectedvariant'] = '以下に示すように変形されます';
$string['ddl_empty'] = 'ドロップダウンリストの選択肢が定義されていません。a, b, c, dのように値を入力してください。';
$string['debuginfo'] = 'デバッグ情報';
$string['defaultmarkzeroifnoprts'] = 'ポテンシャル・レスポンス・ツリーが定義されていない場合，デフォルトの採点は0です。';
$string['defaultprtcorrectfeedback'] = 'よくできました。正解です!';
$string['defaultprtincorrectfeedback'] = '残念，間違いです。';
$string['defaultprtpartiallycorrectfeedback'] = '惜しい！部分的に正解です。';
$string['deletetestcase'] = '問題{$a->question}のテストケース {$a->no}を削除する';
$string['deletetestcaseareyousure'] = '本当に問題{$a->question}のテストケース {$a->no}を削除しますか？';
$string['deletethistestcase'] = 'このテストケースを削除する';
$string['deploy'] = 'デプロイ';
$string['deployedvariants'] = 'デプロイされた変数';
$string['deployedvariantsn'] = 'デプロイされた変数 ({$a})';
$string['deploymany'] = '以下の数の変数を自動的にデプロイします。';
$string['deploymanyerror'] = '入力が間違っています。変数 "{$a->err}" がデプロイできません。';
$string['deploymanynonew'] = '問題ノートが大量に生成されました。';
$string['deploymanynotes'] = '新しい問題ノートの生成に3度失敗するか，問題テストに1度失敗するとSTACKはそれらを中止します。';
$string['deploymanysuccess'] = '新しい変数が正しく生成，テストされ，デプロイされました。{$a->no}';
$string['dropdowngotunrecognisedvalue'] = '不正な入力です。';
$string['editingtestcase'] = '問題{$a->question}のテストケース{$a->no}の編集';
$string['editthistestcase'] = 'このテストケースを編集する';
$string['errors'] = 'エラー';
$string['exceptionmessage'] = '{$a}';
$string['expectedanswernote'] = '予想される解答記録';
$string['expectedoutcomes'] = '予想される出力';
$string['expectedpenalty'] = '予想される減点';
$string['expectedscore'] = '予想される採点';
$string['FacForm_UnPick_intfac'] = '共通因子をくくり出す必要があります。';
$string['FacForm_UnPick_morework'] = '項{$a->m0}に対してさらに計算することができます。';
$string['false'] = '無効';
$string['falsebranch'] = '偽の分岐';
$string['falsebranch_help'] = 'これらのフィールドにより様々な解答の処理が行われます。###「計算」と「点数」により採点します。「=」は特定の点数を与えます。「+ / -」は現在の点から加点・減点を行います。###アダプティブモード，インタラクティブモードでは減点は蓄積されます。###「次のノード」で次にどのノードで評価するか，あるいは終了するかを指定します。###「解答記録」は学生の解答履歴をレポートするためのタグで，ポテンシャル・レスポンス・ツリーのパスと評価関数の出力を記録します。';
$string['feedbackfromprtx'] = '{$a}からのフィードバック';
$string['feedbackvariables'] = 'フィードバック変数';
$string['feedbackvariables_help'] = 'ここで定義されたフィードバック変数と，問題変数とを用いて，入力された解答を処理することができます。フィードバック変数はポテンシャル・レスポンス・ツリーで共通に使うことができます。';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} はどの[[{$a->type}:...]] も含みません。';
$string['firstnodemusthavelowestnumber'] = '最初のノードは最も小さな番号でなければなりません。';
$string['fixdollars'] = '$の修正';
$string['fixdollars_help'] = '<code>$...$</code> や <code>$$...$$</code>によるTeXの表記をコピー・ペーストしたり入力したりするときに，このオプションは便利です。保存する際に，適切な記号に置き換えられます。';
$string['fixdollarslabel'] = '保存する時に，<code>$...$</code> を <code>(...)</code>に，<code>$$...$$</code> を<code>[...]</code> に置き換えます。';
$string['forbiddendoubledollars'] = 'TeXによる数式のインライン表示には<code>(...)</code>を，ディスプレイ表示には<code>[...]</code>を使用してください。<code>$...$</code>や<code>$$...$$</code>は許可されていません。これを自動的に修正するためのオプションがあります。';
$string['forbidfloat'] = '浮動小数点数の禁止';
$string['forbidfloat_help'] = 'Yesが指定されると，浮動小数点数（実数）で入力された解答は禁止されます。';
$string['forbidwords'] = '禁止ワード';
$string['forbidwords_help'] = '学生が解答を入力時に禁止する文字列を，カンマで区切って指定します。';
$string['generalfeedback'] = '模範解答';
$string['generalfeedback_help'] = '全般に対するフィードバックはCASテキストであり，模範解答として学生が解答した後に表示されます。学生の解答に対して与えられるフィードバックとは異なり，全ての学生に対して同じテキストが表示されます。問題変数に応じて表示される場合もあります。';
$string['greek_alphabet_fact'] = '<center> <table> <tr><td> 大文字 (quad) </td><td> 小文字, (quad) </td><td> 名前 </td> </tr> <tr> <td> (A) </td><td> (alpha) </td><td> アルファ </td> </tr> <tr> <td> (B) </td><td> (beta) </td><td> ベータ </td> </tr> <tr> <td> (Gamma) </td><td> (gamma) </td><td> ガンマ </td> </tr> <tr> <td> (Delta) </td><td> (delta) </td><td> デルタ </td> </tr> <tr> <td> (E) </td><td> (epsilon) </td><td> イプシロン </td> </tr> <tr> <td> (Z) </td><td> (zeta) </td><td> ゼータ </td> </tr> <tr> <td> (H) </td><td> (eta) </td><td> イータ </td> </tr> <tr> <td> (Theta) </td><td> (theta) </td><td> シータ </td> </tr> <tr> <td> (K) </td><td> (kappa) </td><td> カッパ </td> </tr> <tr> <td> (M) </td><td> (mu) </td><td> ミュー </td> </tr> <tr> <td> (N) </td><td> ) u) </td><td> ニュー </td> </tr> <tr> <td> (Xi) </td><td> (xi) </td><td> グザイ </td> </tr> <tr> <td> (O) </td><td> (o) </td><td> オミクロン </td> </tr> <tr> <td> (Pi) </td><td> (pi) </td><td> パイ </td> </tr> <tr> <td> (I) </td><td> (iota) </td><td> イオタ </td> </tr> <tr> <td> (P) </td><td> (rho) </td><td> ロー </td> </tr> <tr> <td> (Sigma) </td><td> (sigma) </td><td> シグマ </td> </tr> <tr> <td> (Lambda) </td><td> (lambda) </td><td> ラムダ </td> </tr> <tr> <td> (T) </td><td> (tau) </td><td> タウ </td> </tr> <tr> <td> (Upsilon) </td><td> (upsilon) </td><td> ウプシロン </td> </tr> <tr> <td> (Phi) </td><td> (phi) </td><td> ファイ </td> </tr> <tr> <td> (X) </td><td> (chi) </td><td> カイ </td> </tr> <tr> <td> (Psi) </td><td> (psi) </td><td> プサイ </td> </tr> <tr> <td> (Omega) </td><td> (omega) </td><td> オメガ </td></tr> </table></center>';
$string['greek_alphabet_name'] = 'ギリシャ文字';
$string['healthcheck'] = 'STACK動作確認';
$string['healthcheckcache_db'] = 'CASの演算結果がデータベースにキャッシュされています。';
$string['healthcheckcache_none'] = 'CASの演算結果がキャッシされました。';
$string['healthcheckcachestatus'] = 'キャッシュは {$a} を含んでいます。';
$string['healthcheckconfig'] = 'Maxima設定ファイル';
$string['healthcheckconfigintro1'] = '次のディレクトリにMaximaが見つかり，使用されています。';
$string['healthcheckconfigintro2'] = 'Maximaの設定ファイルを自動生成しています。';
$string['healthcheckconnect'] = 'CASへ接続しています。';
$string['healthcheckconnectintro'] = '以下のCASテキストを評価しています。';
$string['healthcheck_desc'] = '<a href="{$a->link}">動作確認スクリプト</a>により，STACKの全ての機能が正しく動作していることを検証することができます。';
$string['healthcheckfilters'] = '<a href="{$a->url}">フィルターの利用</a>のページで {$a->filter} が利用可能になります。';
$string['healthchecklatex'] = 'LaTeXが正しく変換されているかチェックしています。';
$string['healthchecklatexintro'] = 'STACKではLaTeXを解釈するので，教師はLaTeXを使って問題を作成することができます。LaTeXはMoodleのフィルターにより変換されます。LaTeXのデスプレイ表示とインライン表示の例を以下に表示します。あなたのブラウザで正しく表示されているはずです。表示の問題があれば，それはMoodleのフィルター設定の問題であり，STACKの問題ではありません。STACKでは$あるいは$$のみを使用することができますが，問題の作成においては他の表記を使います。';
$string['healthchecklatexmathjax'] = '式をレンダリングする一つの方法は，次のコードを<a href="{$a}">Additional HTML</a>に設定されている<b>Within HEAD</b>にコピーすることです。';
$string['healthcheckmathsdisplaymethod'] = '数式の表示には{$a}が使われています。';
$string['healthcheckmaximabat'] = 'maxima.batファイルが見つかりません。';
$string['healthcheckmaximabatinfo'] = '"C:Program filesMaxima-1.xx.ybin"のmaxima.batを"{$a}stack"にコピーしようとしましたが，正常に処理できませんでした。このファイルを手動でコピーしてください。';
$string['healthcheckplots'] = 'グラフ描画';
$string['healthcheckplotsintro'] = '二つの異なった描画がなければなりません。同一の描画の場合，描画ファイルのネーミングにエラーが生じます。エラーがないにもかかわらずグラフが描画されない場合，次のいずれかが参考になります。(i)テンポラル・ディレクトリの読み出し許可をチェックしてください。(ii)GNUplotのオプションを変更してください。ただし，現在のところオプション変更のためのWebインターフェースはありません。';
$string['healthchecksamplecas'] = '@ x^4/(1+x^4) @ の微分は [ frac{d}{dx} frac{x^4}{1+x^4} = @ diff(x^4/(1+x^4),x) @. ]';
$string['healthchecksampledisplaytex'] = '[
sum_{n=1}^infty frac{1}{n^2} = frac{pi^2}{6}
]';
$string['healthchecksampleinlinetex'] = '(
sum_{n=1}^infty frac{1}{n^2} = frac{pi^2}{6}
)';
$string['healthchecksampleplots'] = '2つのグラフの例　@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@ @plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3])@';
$string['healthchecksstackmaximanotupdated'] = 'STACKは正常にアップデートされませんでした。<a href="{$a}">System administration -> Notifications page</a>.を確認してください。';
$string['healthchecksstackmaximatooold'] = 'バージョンが古すぎます。';
$string['healthchecksstackmaximaversion'] = 'Maximaのバージョン';
$string['healthchecksstackmaximaversionfixoptimised'] = '<a href="{$a->url}">最適化されたMaxima実行ファイルの再構築</a>を行ってください。';
$string['healthchecksstackmaximaversionfixserver'] = 'MaximaPoolサーバでMaximaのコードを再構築してください。';
$string['healthchecksstackmaximaversionfixunknown'] = 'それがどのようにして起こったのか不明です。この問題は自分で解決する必要があるでしょう。CASのキャッシュを消去して始めてください。';
$string['healthchecksstackmaximaversionmismatch'] = '使用されているSTACK-Maximaライブラリのバージョン ({$a->usedversion}) はSTACK問題タイプで必要とされているバージョン ({$a->expectedversion}) と一致していません。{$a->fix}';
$string['healthchecksstackmaximaversionok'] = '正しいSTACK-Maximaライブラリのバージョンが使われています。({$a->usedversion})';
$string['healthuncached'] = 'CASをキャッシュしません';
$string['healthuncachedintro'] = '現在のキャッシュの設定にかかわらず，このセクションは常にCASに命令を送ります。これは，CASへの接続が本当に現在動作しているかを確認するために必要です。';
$string['healthuncachedstack_CAS_not'] = 'CASは期待したとおりデータを返しましたが，エラーがありました。';
$string['healthuncachedstack_CAS_ok'] = 'CASは期待したとおりデータを返しました。現在CASと接続しています。';
$string['htmlfragment'] = 'HTMLの要素が含まれているようです。';
$string['hyp_functions_fact'] = '双曲線関数は三角関数と同様の性質を持っていますが，次のように指数関数を使って表すことができます。
[ cosh(x) = frac{e^x+e^{-x}}{2}, qquad sinh(x)=frac{e^x-e^{-x}}{2} ] [ tanh(x) = frac{sinh(x)}{cosh(x)} = frac{{e^x-e^{-x}}}{e^x+e^{-x}} ] [ {rm sech}(x) ={1over cosh(x)}={2over {rm e}^x+{rm e}^{-x}}, qquad {rm cosech}(x)= {1over sinh(x)}={2over {rm e}^x-{rm e}^{-x}} ] [ {rm coth}(x) ={cosh(x)over sinh(x)} = {1over {rm tanh}(x)} ={{rm e}^x+{rm e}^{-x}over {rm e}^x-{rm e}^{-x}}]';
$string['hyp_functions_name'] = '双曲線関数';
$string['hyp_identities_fact'] = '双曲線関数と三角関数の類似性が次の関係式により明らかです。
[{rm e}^x=cosh(x)+sinh(x), quad {rm e}^{-x}=cosh(x)-sinh(x)] [cosh^2(x) -sinh^2(x) = 1] [1-{rm tanh}^2(x)={rm sech}^2(x)] [{rm coth}^2(x)-1={rm cosech}^2(x)] [sinh(xpm y)=sinh(x) cosh(y) pm cosh(x) sinh(y)] [cosh(xpm y)=cosh(x) cosh(y) pm sinh(x) sinh(y)] [sinh(2x)=2,sinh(x)cosh(x)] [cosh(2x)=cosh^2(x)+sinh^2(x)] [cosh^2(x)={cosh(2x)+1over 2}] [sinh^2(x)={cosh(2x)-1over 2}]';
$string['hyp_identities_name'] = '双曲線関数の公式';
$string['hyp_inverse_functions_fact'] = '[cosh^{-1}(x)=lnleft(x+sqrt{x^2-1}right) quad  xgeq 1 mbox{ のとき }] [sinh^{-1}(x)=lnleft(x+sqrt{x^2+1}right)] [tanh^{-1}(x) = frac{1}{2}lnleft({1+xover 1-x}right) quad  -1< x < 1 mbox{ のとき }]';
$string['hyp_inverse_functions_name'] = '逆双曲線関数';
$string['illegalcaschars'] = 'CASの入力では@と$は使用できません。';
$string['Illegal_floats'] = 'あなたの解答には小数が含まれています。整数または分数で解答してください。例：0.3333ではなく1/3と入力してください。';
$string['inputdisplayed'] = '表示';
$string['inputentered'] = '入力値';
$string['inputexpression'] = '入力テスト';
$string['inputextraoptions'] = 'その他のオプション';
$string['inputextraoptions_help'] = 'いくつかの解答形式では正常に処理されるためにオプションが必要です。CASの表示で入力してください。';
$string['inputheading'] = '解答欄: {$a}';
$string['inputname'] = '解答の名前';
$string['inputs'] = '解答';
$string['inputstatus'] = '状態';
$string['inputstatusname'] = '空白';
$string['inputstatusnameinvalid'] = '無効';
$string['inputstatusnamescore'] = '採点';
$string['inputstatusnamevalid'] = '有効';
$string['inputtest'] = '解答テスト';
$string['inputtype'] = '解答形式';
$string['inputtypealgebraic'] = '数式';
$string['inputtypeboolean'] = '○/×';
$string['inputtypedropdown'] = 'ドロップダウンリスト';
$string['inputtype_help'] = '解答形式を指定します。';
$string['inputtypematrix'] = '行列';
$string['inputtypesinglechar'] = '単一文字';
$string['inputtypetextarea'] = 'テキストエリア';
$string['insertstars'] = '*(積)の自動入力';
$string['insertstars_help'] = 'Yesが指定されると，システムによって積と判定される部分に自動的に * が挿入されます。それ以外はエラーとなります。';
$string['inversetrig'] = '逆三角関数';
$string['inversetrig_help'] = 'CASの出力で逆三角関数をどのように表示するかを指定します。';
$string['irred_Q_commonint'] = '共通因子をくくり出す必要があります。';
$string['irred_Q_factored'] = '{$a->m0}の項は因数分解してはいけません。';
$string['irred_Q_optional_fac'] = '{$a->m0}は因数分解できますが、その必要はありません。';
$string['Lowest_Terms'] = 'あなたの解答には約分出来ていない箇所があります。もう一度よく見直して入力してください。';
$string['Maxima_DivisionZero'] = 'あなたの解答には0で割られている箇所があります。もう一度見直して入力してください。';
$string['multcross'] = 'クロス (×)';
$string['multdot'] = 'ドット (・)';
$string['multiplicationsign'] = '積の記号';
$string['multiplicationsign_help'] = '積の演算子の表記を定義します。';
$string['mustverify'] = '入力した解答の表示';
$string['mustverify_help'] = 'Yesが指定されると，採点前に，学生が解答として入力したものが，確認のため表示されます。';
$string['namealreadyused'] = 'すでにこの名前は使用されています。';
$string['newnameforx'] = '\'{$a}\'に対する新しい名前';
$string['next'] = '次のノード';
$string['nextcannotbeself'] = '次のノードに現在のノード自身を指定することはできません。';
$string['nodehelp'] = 'ポテンシャル・レスポンス・ツリーのノード';
$string['nodehelp_help'] = '###「評価関数」は2つの数式を比較して，ある数学的な条件を満たしているかどうかを判定します。

###「評価対象」は評価関数の最初の引数で，通常は学生の解答ですが，問題変数やフィードバック変数を含む，任意の数式も使用できます。

###「評価対象」は評価関数の2番目の引数で，通常は正解ですが，問題変数やフィードバック変数を含む，任意の数式も使用できます。

###「オプション」は評価関数に必要な場合に指定します。

###「抑制」は評価関数からのフィードバックを表示しないようにするために指定します。フィードバックのフィールドはこのオプションにより影響を受けることはありません。';
$string['nodeloopdetected'] = 'ポテンシャル・レスポンス・ツリーのループができます。';
$string['nodenotused'] = 'どのノードからもこのノードにリンクがありません。';
$string['nodex'] = 'ノード {$a}';
$string['nodexdelete'] = 'ノード {$a}の削除';
$string['nodexfalsefeedback'] = 'フィードバック';
$string['nodextruefeedback'] = 'フィードバック';
$string['nodexwhenfalse'] = '評価関数：偽';
$string['nodexwhentrue'] = '評価関数：真';
$string['nonempty'] = '空白にできません。';
$string['noprtsifnoinputs'] = '解答を求めない問題はポテンシャル・レスポンス・ツリーを作成することはできません。';
$string['notanswered'] = '解答なし';
$string['notavalidname'] = '正しい名前ではありません。';
$string['notestcasesyet'] = 'テストケースは追加されませんでした。';
$string['options'] = 'オプション';
$string['optionsnotrequired'] = 'この解答形式にはオプションは必要ありません';
$string['overallresult'] = '全体の結果';
$string['penalty'] = '減点';
$string['penaltyerror'] = '減点は0から1の間の数値としてください。';
$string['penaltyerror2'] = '減点は空欄か，0から1の間の数値としてください。';
$string['penalty_help'] = '部分点を与える場合，ポテンシャル・レスポンス・ツリーの結果に応じてここで指定した点数を減点していきます。';
$string['phpcasstring'] = 'PHP出力';
$string['phpsuitecolerror'] = 'PHPエラー';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = 'PHPは不一致と判定しています';
$string['pleaseananswerallparts'] = '全ての問題に解答してください。';
$string['pleasecheckyourinputs'] = 'あなたの入力した数式が期待したものであるか確認してください。';
$string['pluginname'] = 'STACK';
$string['pluginnameadding'] = 'STACK問題の追加';
$string['pluginnameediting'] = 'STACK問題の編集';
$string['pluginname_help'] = 'STACKは数学オンラインテスト・評価システムです。';
$string['pluginnamesummary'] = 'STACKはMoodleにおいて数式で解答する形式の問題を可能にします。数式処理システムを用いて，解答の正誤評価や解答に応じた様々なフィードバックの提示を実現します。';
$string['prtcorrectfeedback'] = '正解の場合のフィードバック';
$string['prtheading'] = 'ポテンシャル・レスポンス・ツリー: {$a}';
$string['prtincorrectfeedback'] = '不正解の場合のフィードバック';
$string['prtmustbesetup'] = '問題を保存する前にポテンシャル・レスポンス・ツリーを設定しなければなりません。';
$string['prtname'] = 'ポテンシャル・レスポンス・ツリー名';
$string['prtnodesheading'] = 'ポテンシャル・レスポンス・ツリーのノード ({$a})';
$string['prtpartiallycorrectfeedback'] = '部分的正解の場合のフィードバック';
$string['prts'] = 'ポテンシャル・レスポンス・ツリー';
$string['prtwillbecomeactivewhen'] = '解答が行われたときに，このポテンシャル・レスポンス・ツリー {$a} は有効になります。';
$string['qm_error'] = 'あなたの解答には ? マークが含まれていますが，それは許可されていません。';
$string['questiondoesnotuserandomisation'] = 'この問題はランダム化されていません。';
$string['questionnotdeployedyet'] = 'この問題ではどの変数もデプロイされていません。';
$string['questionnote'] = '問題メモ';
$string['questionnote_help'] = '問題メモはCASテキストで記述し，個々のランダムな問題を区別するために用いられます。問題メモが同じ場合，またその時にのみ，ランダム化された問題は同じものとみなされます。後の解析のために意味のある問題メモを残すことが重要です。';
$string['questionnotempty'] = '問題変数にrand() が用いられている場合，問題メモは空欄にはできません。問題メモは個々のランダムな問題を区別するために用いられます。';
$string['questionpreview'] = '問題のプレビュー';
$string['questionsimplify'] = '自動簡略化（全般）';
$string['questionsimplify_help'] = '全ての問題でMaximaのグローバルなsimp変数を設定します。';
$string['questiontests'] = '問題のテスト';
$string['questiontext'] = '問題文';
$string['questiontextfeedbackonlycontain'] = '特定フィードバックをもつ問題文に \'{$a}\' を1つだけ含むことができます。';
$string['questiontext_help'] = '学生が実際に目にする問題文でCASテキストで入力します。解答欄と解答確認欄を入力しなければなりません。入力例：[[input:ans1]] [[validation:ans1]]';
$string['questiontextmustcontain'] = '問題文には \'{$a}\' が含まれていなければなりません。';
$string['questiontextnonempty'] = '問題文は空白であってはいけません。';
$string['questiontextonlycontain'] = '問題文には \'{$a}\' が含まれていなければなりません。';
$string['questiontextplaceholderswhitespace'] = '空白文字を含むことができません。\'{$a}';
$string['questionvalue'] = '問題番号';
$string['questionvaluepostive'] = '問題番号は正でなければなりません。';
$string['questionvariables'] = '問題変数';
$string['questionvariables_help'] = '問題文の中で使用する変数を定義し，ランダム問題を作成することもできます。ここで定義された変数は，他のフィールドでも使用できます。';
$string['quiet'] = '抑制';
$string['quiet_help'] = '「はい」と設定された場合，評価関数によって自動的に生成されるフィードバックは抑制され，学生には表示されません。このオプションは，フィードバックのフィールドには影響を与えません。';
$string['renamequestionparts'] = '問題の一部の名前を変更します';
$string['replacedollarscount'] = 'このカテゴリはSTACKの問題{$a}を含みます。';
$string['replacedollarsin'] = '{$a}の$を修正しました。';
$string['replacedollarsindex'] = 'STACKの問題の内容';
$string['replacedollarsindexintro'] = 'これらのどのリンクをクリックしても$を含む問題をプレビューでき，自動的に修正します。';
$string['replacedollarsindextitle'] = '問題文中の $ を置き換えます。';
$string['replacedollarsnoproblems'] = '問題のある$は見つかりませんでした。';
$string['replacedollarstitle'] = '{$a} 内の $ を置き換えます。';
$string['requiredfield'] = 'このフィールドは必須です。';
$string['requirelowestterms'] = '約分を要求する';
$string['requirelowestterms_help'] = 'Yesが指定されると，分数は約分されていなければなりません。もし約分されていなければ解答は受け付けられません。';
$string['runquestiontests'] = '問題のテストを実行します';
$string['sans'] = '評価対象';
$string['sans_help'] = 'これは評価関数の第1引数で，通常，学生の解答ですが，に任意のCASテキストを指定することができ，問題変数，フィードバック変数に依存したものも可能です。';
$string['sansinvalid'] = '評価対象が正しく指定されていません。{$a}';
$string['sansrequired'] = '評価対象は空欄とすることはできません。';
$string['score'] = '点数';
$string['scoreerror'] = '点数は0から1の間の数値でなければなりません。';
$string['scoremode'] = '計算';
$string['seedx'] = '乱数のシード {$a}';
$string['settingajaxvalidation'] = 'リアルタイム表示';
$string['settingajaxvalidation_desc'] = 'Yesが指定されると，学生の解答はリアルタイムに表示され確認されます。学生にとって使い勝手はよいかもしれませんが，サーバに負荷がかかります。';
$string['settingcasdebugging'] = 'CASのデバッグ';
$string['settingcasdebugging_desc'] = 'CAS接続についてのデバッグ情報を保存するかどうかを指定します';
$string['settingcasmaximaversion'] = 'Maximaのバージョン';
$string['settingcasmaximaversion_desc'] = '使用しているMaximaバーション';
$string['settingcasresultscache'] = 'CASの結果をキャッシュ';
$string['settingcasresultscache_db'] = 'データベースのキャッシュ';
$string['settingcasresultscache_desc'] = 'この設定はCASの情報をキャッシュするかどうかを決定します。Maximaのコードを変更するような開発を行うのでなければ，この設定は有効にしておくべきです。キャッシュの現在の情報は動作確認のページに表示されます。例えばgnuplotコマンドなどの設定を変更する場合，その効果を確かめる前にキャッシュをクリアする必要があります。';
$string['settingcasresultscache_none'] = 'キャッシュしない';
$string['settingcastimeout'] = 'CASタイムアウト';
$string['settingcastimeout_desc'] = 'Maximaへの接続のタイムアウト';
$string['settingdefaultinputoptions'] = 'デフォルトの解答形式オプション';
$string['settingdefaultinputoptions_desc'] = '新しい問題を作成したり，既存の問題に新しい解答欄を加えるときに参照されます。';
$string['settingdefaultquestionoptions'] = 'デフォルトの解答形式オプション';
$string['settingdefaultquestionoptions_desc'] = '新しい問題を作成するときに使用します。';
$string['settingmathsdisplay'] = '数式表示フィルター';
$string['settingmathsdisplay_desc'] = '数式を表示するための方法。もしMathJaxを選択した場合，動作確認のページで指示に従わなければなりません。フィルターを選択したら，設定ページでそのフィルターを有効にしなければなりません。';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = 'OU Mathフィルター';
$string['settingmathsdisplay_tex'] = 'Moodle TeX フィルター';
$string['settingplatformmaximacommand'] = 'Maximaコマンド';
$string['settingplatformmaximacommand_desc'] = 'STACKはMaximaのコマンドの場所を知らなければなりません。もし空欄の場合推測します。';
$string['settingplatformplotcommand'] = 'gnuplot コマンド';
$string['settingplatformplotcommand_desc'] = 'STACKはgnuplotのコマンドの場所を知らなければなりません。もし空欄の場合推測します。';
$string['settingplatformtype'] = 'プラットフォームタイプ';
$string['settingplatformtype_desc'] = 'STACKはどのOS上で動作しているかを知る必要があります。サーバのオプションを指定することによりパフォーマンスが向上します。Linux（最適化）はドキュメントの「Maxima最適化」の項で解説されています。';
$string['settingplatformtypeserver'] = 'サーバ';
$string['settingplatformtypeunix'] = 'Linux';
$string['settingplatformtypeunixoptimised'] = 'Linux（最適化）';
$string['settingplatformtypewin'] = 'Windows';
$string['settingreplacedollars'] = '<code>$</code> と <code>$$</code> を置き換え';
$string['settingreplacedollars_desc'] = '問題テキストの <code>$</code> と <code>$$</code> を<code>[...]</code> と <code>(...)</code> に置き換えます。「数式タグの修正スクリプト」が便利です。';
$string['settingsmathsdisplayheading'] = '数式表示オプション';
$string['settingsmaximasettings'] = 'Maximaに接続しています';
$string['settingusefullinks'] = '便利なリンク';
$string['showingundeployedvariant'] = 'デプロイされていない変数 {$a} を表示しています';
$string['showvalidation'] = '解答書式の確認';
$string['showvalidation_help'] = 'Yesが指定されると，入力された解答の書式（文法）が正しいかどうかを確認し，伝統的な2次元表示で数式を表示します。';
$string['singlechargotmorethanone'] = 'ここには1文字だけ入力できます。';
$string['specificfeedback'] = '特定フィードバック';
$string['specificfeedback_help'] = 'デフォルトでは各ポテンシャル・レスポンス・ツリーのフィードバックはこのブロックに表示されます。表示位置を問題テキストに移動が可能ですが，その場合にはMoodleはあまり制御できません。このブロックはCASテキストではありません。';
$string['specificfeedbacktags'] = '特定フィードバックには\'{$a}\'が含まれてはいけません。';
$string['sqrtsign'] = '平方根の記号';
$string['sqrtsign_help'] = '平方根の記号を表示します。';
$string['stackCas_allFailed'] = 'CASは何も評価された式を返しませんでした。CASとの接続を確認してください。';
$string['stackCas_apostrophe'] = 'アポストロフィは許可されていません。';
$string['stackCas_backward_inequalities'] = '不等号≦，≧は<=，=>と入力しなければなりません。あなたの入力した数式には{$a->cmd}が含まれています。';
$string['stackCas_bracketsdontmatch'] = '数式中の括弧の入れ子が正しくありません。{$a->cmd}';
$string['stackCas_CASError'] = 'CASは次のエラーを返しました。';
$string['stackCas_CASErrorCaused'] = 'CASエラーが発生しました。';
$string['stackCas_chained_inequalities'] = 'あなたの入力した数式には (a lt b lt c ) のような形式の連結不等式が含まれているようです。個々の不等式を AND や OR の論理演算で結合する必要があります。';
$string['stackCas_failedReturn'] = 'CASはデータを返しませんでした。';
$string['stackCas_failedValidation'] = 'CASテキストが正しくありません。';
$string['stackCas_finalChar'] = '\'{a->char}\'は{a->cmd}の中では無効な終端文字です。';
$string['stackCas_forbiddenChar'] = 'CASコマンドには文字 {$a->char} を含んではいけません。';
$string['stackCas_forbiddenWord'] = '{$a->forbid}は禁止されています。';
$string['stackCas_invalidCommand'] = 'CASコマンドが間違っています。';
$string['stackCas_MissingAt'] = '<code>@</code>が入力されていません。';
$string['stackCas_MissingCloseDisplay'] = '<code>]</code>が入力されていません。';
$string['stackCas_MissingCloseHTML'] = 'HTMLタグを閉じ忘れています。';
$string['stackCas_MissingCloseInline'] = '<code>)</code>が入力されていません。';
$string['stackCas_MissingDollar'] = '<code>$</code>が入力されていません。';
$string['stackCas_missingLeftBracket'] = '左括弧がありません(<span class="stacksyntaxexample">{a->bracket}</span>)：{a->cmd}。';
$string['stackCas_MissingOpenDisplay'] = '<code>[</code>が入力されていません。';
$string['stackCas_MissingOpenHTML'] = 'HTMLの始まりタグを忘れています。';
$string['stackCas_MissingOpenInline'] = '<code>(</code>が入力されていません。';
$string['stackCas_missingRightBracket'] = '右かっこがありません(<span class="stacksyntaxexample">{a->bracket}</span>)：{a->cmd}。';
$string['stackCas_MissingStars'] = '*を忘れているようです。 おそらく{$a->cmd}とタイプしたと思われます。';
$string['stackCas_MissingString'] = '引用符<code>"</code>を忘れています。';
$string['stackCas_newline'] = '改行文字は許可されていません。';
$string['stackCas_percent'] = '式の中に%が含まれています: {$a->expr}。';
$string['stackCas_spaces'] = '式の中に空白が含まれています: {$a->expr}。';
$string['stackCas_spuriousop'] = '不明な演算子です。{$a->cmd}';
$string['stackCas_tooLong'] = 'CASテキストの記述が長過ぎます。';
$string['stackCas_unknownFunction'] = '不明な関数です。{$a->forbid}';
$string['stackCas_unsupportedKeyword'] = 'サポートされていないキーワードです。 {$a->forbid}';
$string['stackDoc_404'] = 'エラー 404';
$string['stackDoc_404message'] = 'ファイルが見つかりません。';
$string['stackDoc_directoryStructure'] = 'ディレクトリー構成';
$string['stackDoc_docs'] = 'STACKドキュメント';
$string['stackDoc_docs_desc'] = '<a href="{$a->link}">STACKドキュメント</a>：STACK wiki';
$string['stackDoc_home'] = 'ドキュメントホーム';
$string['stackDoc_index'] = 'カテゴリインデックス';
$string['stackDoc_parent'] = '親';
$string['stackDoc_siteMap'] = 'サイトマップ';
$string['stackInstall_input_intro'] = 'このページでは学生からの入力をSTACKがどのように解釈するのかを確認することができます。<br />\'V\' はPHPとCASによって判定された妥当性を記録しています。V1はPHPの妥当性，V2はCASの妥当性です。';
$string['stackInstall_input_title'] = '学生の入力をテストするためのツール';
$string['stackInstall_input_title_desc'] = '<a href="{$a->link}">解答入力の確認スクリプト</a> は学生が解答として入力した数式をSTACKがどのように解釈するかをテストします。';
$string['stackInstall_replace_dollars_desc'] = '<a href="{$a->link}">数式タグの修正スクリプト</a> は<code>$...$</code> と<code>$$...$$</code> を <code>( ... )</code>と<code>[ ... ]</code> に置き換えます。';
$string['stackInstall_testsuite_choose'] = '評価関数を選んでください。';
$string['stackInstall_testsuite_fail'] = '問題が発生しました。';
$string['stackInstall_testsuite_intro'] = 'このページは評価関数などが正しく機能するかを確認します。 Webインターフェースを通してのみチェックされることに注意してください。その他のMaximaのコマンドはunittest.macを確認してコマンドラインからチェックを行ってください。';
$string['stackInstall_testsuite_pass'] = 'すべてのテストをパスしました。';
$string['stackInstall_testsuite_title'] = 'STACK評価関数の動作テスト';
$string['stackInstall_testsuite_title_desc'] = '<a href="{$a->link}">評価関数の確認スクリプト</a> は評価関数が正しく動作するかどうかを確認します。それぞれの評価関数がどのように使用されるかは，例を参考にしてください。';
$string['stackOptions_AnsTest_values_AlgEquiv'] = '代数等価';
$string['stackOptions_AnsTest_values_CasEqual'] = '構文等価';
$string['stackOptions_AnsTest_values_CompSquare'] = '平方完成';
$string['stackOptions_AnsTest_values_Diff'] = '微分';
$string['stackOptions_AnsTest_values_EqualComAss'] = '交換・結合等価';
$string['stackOptions_AnsTest_values_Expanded'] = '展開';
$string['stackOptions_AnsTest_values_FacForm'] = '因数分解';
$string['stackOptions_AnsTest_values_GT'] = '超過';
$string['stackOptions_AnsTest_values_GTE'] = '以上';
$string['stackOptions_AnsTest_values_Int'] = '積分';
$string['stackOptions_AnsTest_values_LowestTerms'] = '既約';
$string['stackOptions_AnsTest_values_NumAbsolute'] = '絶対精度';
$string['stackOptions_AnsTest_values_NumDecPlaces'] = '少数部桁数';
$string['stackOptions_AnsTest_values_NumRelative'] = '相対精度';
$string['stackOptions_AnsTest_values_NumSigFigs'] = '有効数字';
$string['stackOptions_AnsTest_values_PartFrac'] = '部分分数';
$string['stackOptions_AnsTest_values_RegExp'] = '正規表現';
$string['stackOptions_AnsTest_values_SameType'] = '型等価';
$string['stackOptions_AnsTest_values_SingleFrac'] = '仮分数';
$string['stackOptions_AnsTest_values_String'] = '文字列';
$string['stackOptions_AnsTest_values_StringSloppy'] = 'あいまい文字列';
$string['stackOptions_AnsTest_values_SubstEquiv'] = '変数等価';
$string['stackOptions_AnsTest_values_SysEquiv'] = '多項式等価';
$string['stackQuestion_noQuestionParts'] = '解答すべき問題がありません。';
$string['stop'] = '終了';
$string['strictsyntax'] = '厳密な文法';
$string['strictsyntax_help'] = 'Yesが指定されると，解答の入力は厳密なMaximaの書式である必要があります。Noが指定された場合，積の * が省かれていると，入力された文字列が関数とみなされるなど，幅広く解釈されます。';
$string['strlengtherror'] = '文字列は255文字以下です。';
$string['studentanswer'] = '評価対象';
$string['studentValidation_invalidAnswer'] = 'この解答は正しく入力されていません。';
$string['studentValidation_yourLastAnswer'] = 'あなたの入力した数式は次のとおりです : {$a}';
$string['Subst'] = '{$a->m0}の変数の代入を行うと，あなたの解答は正しいいでしょう。';
$string['switchtovariant'] = '任意の変数に変更します';
$string['syntaxhint'] = '書式のヒント';
$string['syntaxhint_help'] = '解答入力の書式の例が表示されます。';
$string['tans'] = '評価基準';
$string['tans_help'] = 'これは評価関数の第2引数で，通常，正答ですが，任意のCASテキストを指定することができます。また，それは問題変数，フィードバック変数に依存していることも可能です。';
$string['tansinvalid'] = '評価基準が正しくありません{$a}';
$string['tansrequired'] = '評価基準は空欄とすることはできません。';
$string['teacheranswer'] = '評価基準';
$string['teachersanswer'] = '正解';
$string['teachersanswer_help'] = '各解答欄に対する正解を指定しなければなりません。この正解は正しいMaximaの書式となっており，問題変数を用いることができます。';
$string['testcasexresult'] = 'テストケース{$a->no} {$a->result}';
$string['TEST_FAILED'] = '評価関数が正しく実行されませんでした。{$a->errors}';
$string['testingquestion'] = '問題の確認 {$a}';
$string['testinputs'] = '解答の確認';
$string['testinputsimpwarning'] = '問題やポテンシャル・レスポンス・ツリーのオプションにかかわらず，テスト入力は<em>簡略化されていない形式</em>であることに注意してください。簡略化する場合は<tt>ev(..., simp)</tt>を使ってください。';
$string['testoptions'] = 'オプション';
$string['testoptions_help'] = 'このフィールドは評価関数にオプションを可能にします。変数や数値の精度を入力してください。';
$string['testoptionsinvalid'] = 'オプションが正しくありません。{$a}';
$string['testoptionsrequired'] = 'この評価関数にはオプションが必要です。';
$string['testpassesandfails'] = '{$a->passes} はパスし {$a->fails} はエラーが生じました。';
$string['testsuitecolerror'] = 'CASエラー';
$string['testsuitecolexpectedscore'] = '予想される採点';
$string['testsuitecolpassed'] = 'パスしますか？';
$string['testsuitecolrawmark'] = '素点';
$string['testsuitefail'] = '失敗';
$string['testsuitefeedback'] = 'フィードバック';
$string['testsuiteknownfail'] = '予想される間違い';
$string['testsuiteknownfailmaths'] = '予想される間違い（数学）';
$string['testsuitenotests'] = '評価関数の番号{$a->no}';
$string['testsuitepass'] = 'パス';
$string['testsuiteteststook'] = '評価に {$a->time} 秒かかりました。';
$string['testsuiteteststookeach'] = '平均評価時間：{$a->time} 秒';
$string['testthisvariant'] = 'この変数を評価します';
$string['texdisplaystyle'] = 'ディスプレイ表示の方程式';
$string['texinlinestyle'] = 'インライン表示の方程式';
$string['tidyquestion'] = '小問';
$string['tidyquestionx'] = '問題 {$a} の一部の名前の変更';
$string['trig_degrees_radians_fact'] = '[ 360^circ= 2pi hbox{ ラジアン},quad 1^circ={2piover 360}={piover 180}hbox{ ラジアン} ] [ 1 hbox{ ラジアン} = {180over pi} hbox{ 度} approx 57.3^circ ]';
$string['trig_degrees_radians_name'] = '度とラジアン';
$string['trig_standard_identities_fact'] = '[sin(apm b) =  sin(a)cos(b) pm cos(a)sin(b)] [cos(a pm b) =  cos(a)cos(b) mp sin(a)sin(b)] [tan (a pm b) =  {tan (a) pm tan (b)over1 mp tan (a)tan (b)}] [ 2sin(a)cos(b) =  sin(a+b) + sin(a-b)] [ 2cos(a)cos(b) =  cos(a-b) + cos(a+b)] [ 2sin(a)sin(b)  =  cos(a-b) - cos(a+b)] [ sin^2(a)+cos^2(a) =  1] [ 1+{rm cot}^2(a) =  {rm cosec}^2(a),quad tan^2(a) +1  =  sec^2(a)] [ cos(2a) =  cos^2(a)-sin^2(a) =  2cos^2(a)-1 =  1-2sin^2(a)] [ sin(2a) =  2sin(a)cos(a)] [ sin^2(a)  =  {1-cos (2a)over 2}, qquad cos^2(a) =  {1+cos(2a)over 2}]';
$string['trig_standard_identities_name'] = '標準的な三角関数の公式';
$string['trig_standard_values_fact'] = '[sin(45^circ)={1over sqrt{2}}, qquad cos(45^circ) = {1over sqrt{2}},qquad tan( 45^circ)=1 ] [ sin (30^circ)={1over 2}, qquad cos (30^circ)={sqrt{3}over 2},qquad tan (30^circ)={1over sqrt{3}} ] [ sin (60^circ)={sqrt{3}over 2}, qquad cos (60^circ)={1over 2},qquad tan (60^circ)={ sqrt{3}} ]';
$string['trig_standard_values_name'] = '標準的な三角関数の値';
$string['true'] = '真';
$string['truebranch'] = '真の分岐';
$string['truebranch_help'] = 'これらのフィールドは評価関数が真の場合の処理です。

###「計算」と「点数」により採点します。「=」は特定の点数を与えます。「+ / -」は現在の点から加点・減点を行います。

###アダプティブモード，インタラクティブモードでは減点は蓄積されます。

###「次のノード」で次にどのノードで評価するか，あるいは終了するかを指定します。

###「解答記録」は学生の解答履歴をレポートするためのタグで，ポテンシャル・レスポンス・ツリーのパスと評価関数の出力を記録します。';
$string['undeploy'] = 'アンデプロイ';
$string['variant'] = '変数';
$string['variantsselectionseed'] = 'ランダムグループ';
$string['variantsselectionseed_help'] = '通常，ここは空欄でかまいません。一つの小テストに含まれる二つの問題において同じ乱数シードを使いたい場合，この欄に二つの問題に対して用いる文字列を入力することにより，二つの問題の乱数シードは同期します。（デプロイされたものを使う場合は，同じ乱数シードをデプロイすること）';
$string['verifyquestionandupdate'] = '問題テキストのチェックと入力フォームの更新';
