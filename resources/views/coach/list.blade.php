
<x-mastercoach>
    <x-slot name="title">コーチリスト</x-slot>
  
    <x-slot name="content">

        <!--=================================================
        Form
        ==================================================-->
        
       @section('content')
        <form action="{{ route('coach.list') }}" method="get" role="form">
            @csrf

            <div class="form-group">
                <label for="number" class="control-label col-xs-2">ジャンル</label>
                <div class="col-xs-10">
                    <select name="category_name" class="form-control select select-primary mbl">
                        <option value="起業したい" {{ $category_name == '起業したい' ? 'selected' : '' }}>起業したい</option>
                        <option value="副業を始めたい" {{ $category_name == '副業を始めたい' ? 'selected' : '' }}>副業を始めたい</option>
                        <option value="資格取得をしたい" {{ $category_name == '資格取得をしたい' ? 'selected' : '' }}>資格取得をしたい</option>
                        <option value="海外移住したい" {{ $category_name == '海外移住したい' ? 'selected' : '' }}>海外移住したい</option>
                        <option value="自分に合った働きかたを考えたい" {{ $category_name == '自分に合った働きかたを考えたい' ? 'selected' : '' }}>自分に合った働きかたを考えたい</option>
                        <option value="新たな趣味を見つけたい" {{ $category_name == '新たな趣味を見つけたい' ? 'selected' : '' }}>新たな趣味を見つけたい</option>
                        <option value="その他" {{ $category_name == 'その他' ? 'selected' : '' }}>その他</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="number" class="control-label col-xs-2">性格診断</label>
                <div class="col-xs-10">
                    <select name="pref" class="form-control select select-primary mbl">
                        <optgroup label="分析家">
                            <option value="建築家" {{ $personality == '建築家' ? 'selected' : '' }}>建築家</option>
                            <option value="論理学者" {{ $personality == '論理学者' ? 'selected' : '' }}>論理学者</option>
                            <option value="指揮官" {{ $personality == '指揮官' ? 'selected' : '' }}>指揮官</option>
                            <option value="討論者" {{ $personality == '討論者' ? 'selected' : '' }}>討論者</option>
                        </optgroup>
                        <optgroup label="外交官">
                            <option value="提唱者" {{ $personality == '提唱者' ? 'selected' : '' }}>提唱者</option>
                            <option value="仲介者" {{ $personality == '仲介者' ? 'selected' : '' }}>仲介者</option>
                            <option value="主人公" {{ $personality == '主人公' ? 'selected' : '' }}>主人公</option>
                            <option value="広報運動家" {{ $personality == '広報運動家' ? 'selected' : '' }}>広報運動家</option>
                        </optgroup>
                        <optgroup label="番人">
                            <option value="管理者" {{ $personality == '提唱者' ? 'selected' : '' }}>提唱者</option>
                            <option value="擁護者" {{ $personality == '仲介者' ? 'selected' : '' }}>仲介者</option>
                            <option value="幹部" {{ $personality == '主人公' ? 'selected' : '' }}>主人公</option>
                            <option value="領事館" {{ $personality == '領事館' ? 'selected' : '' }}>領事館</option>
                        </optgroup>
                         <optgroup label="探検家">
                            <option value="巨匠" {{ $personality == '巨匠' ? 'selected' : '' }}>巨匠</option>
                            <option value="冒険者" {{ $personality == '冒険者' ? 'selected' : '' }}>冒険者</option>
                            <option value="起業家" {{ $personality == '起業家' ? 'selected' : '' }}>起業家</option>
                            <option value="エンターテイナー" {{ $personality == 'エンターテイナー' ? 'selected' : '' }}>エンターテイナー</option>
                        </optgroup>
                        </select>
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 text-center">
                <button type="submit" class="btn btn-default">検索</button>
              </div>
            </div>
            </form>
       
            @endsection
            
            @section('table')
            
            <table class="table table-striped">
              <tr>
                <th>名前</th>
                <th>ジャンル</th>
                <th>性格診断</th>
                <th>キャリア</th>
                <th>資格</th>
                <th>星</th>
              </tr>
              <!-- loop -->
              @foreach($coaches as $coach)
              <tr>
                <td>{{ $coach->name }}</td>
                <td>{{ $coach->category_name }}</td>
                <td>{{ $coach->personalities }}</td>
                <td>{{ $coach->career }}</td>
                <td>{{ $coach->license }}</td>
                <td>{{ $coach->stars }}</td>
              </tr>
              @endforeach
            </table>
            <div class="paginate text-center">
              {!! $coaches->appends(['category_name' => $category_name, 'personalities' => $personality])->render() !!}
            </div>
            @endsection
            
</x-mastercoach>