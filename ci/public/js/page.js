
function go_login()
{
  location.href = "/login/loginpage";
}
function logout()
{
  location.href = "/login/logout_func";
}

function go_list(list)
{
  location.href = "/board/"+list;
}


function go_list_search(list, search_by, search_input)
{
  location.href = "/board/" + list + "?search_by=" + search_by + "&search_input=" + search_input;
}

function no_login_page()
{
  location.href = '/board';
}

function findPw_page()
{
  location.href = '/login/findPw_page';
}

function register_page()
{
  location.href = '/register';
}

function go_list(list)
{
  location.href = "/board/"+list;
}


function go_list_search(list, search_by, search_input)
{
  location.href = "/board/" + list + "?search_by=" + search_by + "&search_input=" + search_input;
}