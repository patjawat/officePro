import React from 'react'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Cookies from 'js-cookie'
export default function Header() {
  const store = useSelector(state => state);
  const username = store.user ? store.user.profile.name : null;
  
  const dispatch = useDispatch();
  const router = useRouter()

    return (
        <nav className="navbar navbar-expand-lg  navbar-dark bg-dark shadow">
  <a className="navbar-brand" href="#">Office-Pro
  {/* <img src="http://placehold.it/150x50?text=Logo" alt="" /> */}
  {/* <img className="" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:50}}/> */}
  </a>
  <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span className="navbar-toggler-icon" />
  </button>
  <div className="collapse navbar-collapse" id="navbarSupportedContent">
    <ul className="navbar-nav mr-auto">
      <Link href="/" className="nav-item">
        <a className="nav-link" ><i class="fas fa-home"></i> หน้าหลัก <span className="sr-only">(current)</span></a>
      </Link>
      <Link href="/" className="nav-item">
        <a className="nav-link" ><i class="fas fa-book-reader"></i> ระบบห้องประชุม <span className="sr-only">(current)</span></a>
      </Link>
      <Link href="/assets-management" className="nav-item">
        <a className="nav-link" ><i class="fas fa-hdd"></i> พัสดุครุภัณฑ์ <span className="sr-only">(current)</span></a>
      </Link>
      <Link href="/" className="nav-item">
        <a className="nav-link" ><i class="far fa-file-alt"></i> งานสารบัญ <span className="sr-only">(current)</span></a>
      </Link>
      <Link href="/" className="nav-item">
        <a className="nav-link" ><i class="fas fa-file-medical-alt"></i> เครื่องมือแพทย์ <span className="sr-only">(current)</span></a>
      </Link>
      <li className="nav-item dropdown">
        <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdownปป
        </a>
        <div className="dropdown-menu" aria-labelledby="navbarDropdown">
          <a className="dropdown-item" href="#">Action</a>
          <a className="dropdown-item" href="#">Another action</a>
          <div className="dropdown-divider" />
          <a className="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li className="nav-item">
        <a className="nav-link disabled" href="#" tabIndex={-1} aria-disabled="true">Disabled</a>
      </li>
    </ul>
    {/* <form className="form-inline my-2 my-lg-0 ">
      <input className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> */}
    <ul className="navbar-nav ml-auto">
    <li className="nav-item dropdown">
        <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-lock"></i> {username}
        </a>
        <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <Link href="/profile">
          <a className="dropdown-item" >Profile</a>
          </Link>
          <a className="dropdown-item" onClick={()=>{
                         Cookies.remove('token', {
                          expires: 1
                      });
                        router.push('/login')
                       
                      }}>Sign out</a>
          <a className="dropdown-item" href="#">Another action</a>
          <div className="dropdown-divider" />
          <a className="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    

    
  </div>
</nav>

    )
}
