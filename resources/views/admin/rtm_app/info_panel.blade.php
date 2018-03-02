
<!--
 * Created by PhpStorm.
 * User: abhighyaa
 * Date: 1/4/17
 * Time: 9:55 AM
 -->

@extends('admin.layouts.app')

@section('htmlheader_title')

    Documentation

@endsection

@section('main-content')

    <div class="row">

        <h1>&nbsp Implementing Score Definitions</h1>
        <div class="col-md-12">

            <table class="table table-striped table-condensed table-bordered" caption="implementing score definition">

                <tbody>

                <tr>
                    <th>
                        Sr.
                    </th>
                    <th>
                        Rule
                    </th>
                    <th>
                        Weightage
                    </th>
                    <th>
                        Description
                    </th>
                </tr>

                <tr>
                    <td>
                        1.
                    </td>
                    <td>
                        Image Test
                    </td>
                    <td>
                        15
                    </td>
                    <td>
                        Every image must have an alternative text.
                    </td>
                </tr>

                <tr>
                    <td>
                        2.
                    </td>
                    <td>
                        Language Test
                    </td>
                    <td>
                        5
                    </td>
                    <td>
                        Every webpage code must have "lang" attribute in html tag.
                    </td>
                </tr>

                <tr>
                    <td>
                        3.
                    </td>
                    <td>
                        Label Test
                    </td>
                    <td>
                        13
                    </td>
                    <td>
                        Every form must have same number of label tags as it has input tags.
                    </td>
                </tr>

                <tr>
                    <td>
                        4.
                    </td>
                    <td>
                        Link Test
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        Each "a" tag must have "href" attribute.
                    </td>
                </tr>

                <tr>
                    <td>
                        5.
                    </td>
                    <td>
                        Caption Test
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        Every table must have its caption.
                    </td>
                </tr>

                <tr>
                    <td>
                        6.
                    </td>
                    <td>
                        Meaningful Links
                    </td>
                    <td>
                        12
                    </td>
                    <td>
                        One should avoid links like Click here, Read more etc that makes no sense.
                    </td>
                </tr>

                <tr>
                    <td>
                        7.
                    </td>
                    <td>
                        Aria Landmark Test
                    </td>
                    <td>
                        7
                    </td>
                    <td>
                        Atleast "role" attribute must be included once.
                    </td>
                </tr>

                <tr>
                    <td>
                        8.
                    </td>
                    <td>
                        Marquee Test
                    </td>
                    <td>
                        8
                    </td>
                    <td>
                        "marquee" tag must be avoided.
                    </td>
                </tr>

                <tr>
                    <td>
                        9.
                    </td>
                    <td>
                        Blink Test
                    </td>
                    <td>
                        8
                    </td>
                    <td>
                        Blinks must be avoided.
                    </td>
                </tr>

                <tr>
                    <td>
                        10.
                    </td>
                    <td>
                        Video Transcripts
                    </td>
                    <td>
                        12
                    </td>
                    <td>
                        Every video must have transcripts.
                    </td>
                </tr>

                </tbody>

            </table>

        </div>

    </div>

    <div class="row">

        <h2>Implementation Score Computation</h2>

        <div class="panel panel-default">
            <div class="well">
                <h3><strong><em>Implementation score = (P/T)*W</em></strong></h3>
            </div>
            <div class="panel-body">
                where
                <ul>
                    <li>
                        P = number of passed elements
                    </li>
                    <li>
                        T = total number of elements
                    </li>
                    <li>
                        W = weightage of each rule/tag
                    </li>
                </ul>

            </div>
        </div>

        <h3> Else </h3>

        <div class="panel panel-default">
            <div class="well">
                <h3><strong><em>Implementation score = W*x</em></strong></h3>
            </div>
            <div class="panel-body">
                where
                <ul>
                    <li>
                        W = weightage of each rule/tag
                    </li>
                    <li>x = <ul>
                            <li>
                                1 : If the element to be checked is present.
                            </li>
                            <li>
                                0 : If the element to be checked is not present.
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>
        </div>

        <div>
            Say For Example: <br>
            If a website has 6 images among which 3 have alt tags, then no of passed elements are 3 and total are 6. So,
            Implementation score = (3/6)*1 = .5
            Similarly, all other checks will be implemented and implementation score for each rule and eventually added.
        </div>

        <div>
            <h3>For other accessibility checks visit <a href="https://www.w3.org/WAI/intro/wcag">W3C and WCAG</a> </h3>
        </div>


@endsection










