import Head from 'next/head'
import styles from '../styles/Home.module.css'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Theme from "../layouts/adminle3";
// import Theme from "../layouts/blankLayout";

// import Theme from "../layouts/adminle3";
export default function Home(props) {

  const counter = useSelector(state => state.book.numOfBooks);
  const store = useSelector(state => state);

  // const [Load, setLoad] = useState(false)
  const dispatch = useDispatch();

  return (
    <div>
      <div>
        <div className="row">
        <Link href="/booking-plan" className="nav-item">
          <div className="col-xl-6 col-md-12">
            <div className="card bg-secondary">
              <div className="card-header">
              <h4><i class="far fa-edit"></i> ระบบจองห้องประชุม</h4>
              </div>
              <div className="card-content">
                <div className="card-body cleartfix">
                  <div className="media align-items-stretch">
                    <div className="align-self-center">
                      <i className="icon-speech warning font-large-2 mr-2" />
                    </div>
                    <div className="media-body">
                      <div className="row">
                        <div className="col-3">
                        <div className="widget-user-image">
                        <img className="img-circle elevation-2" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:100}}/>
                      </div>
                        </div>
                        <div className="col-9">
                          sdfsdf
                        </div>
                      </div>
                    
                    </div>
                    <div className="align-self-center">
                      {/* <h3>ระบบจองห้องประชุม</h3> */}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </Link>

          <div className="col-xl-6 col-md-12">
            <div className="card bg-secondary">
              <div className="card-header">
              <h4><i class="far fa-edit"></i> ระบบจองรถ</h4>
              </div>
              <div className="card-content">
                <div className="card-body cleartfix">
                  <div className="media align-items-stretch">
                    <div className="align-self-center">
                      <i className="icon-speech warning font-large-2 mr-2" />
                    </div>
                    <div className="media-body">
                      <div className="row">
                        <div className="col-3">
                        <div className="widget-user-image">
                        <img className="img-circle elevation-2" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:100}}/>
                      </div>
                        </div>
                        <div className="col-9">
                          sdfsdf
                        </div>
                      </div>
                    
                    </div>
                    <div className="align-self-center">
                      {/* <h3>ระบบจองห้องประชุม</h3> */}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div className="col-xl-6 col-md-12">
            <div className="card bg-secondary">
              <div className="card-header">
              <h4><i class="far fa-edit"></i> ระบบจพัสดุตรุภัณฑ์</h4>
              </div>
              <div className="card-content">
                <div className="card-body cleartfix">
                  <div className="media align-items-stretch">
                    <div className="align-self-center">
                      <i className="icon-speech warning font-large-2 mr-2" />
                    </div>
                    <div className="media-body">
                      <div className="row">
                        <div className="col-3">
                        <div className="widget-user-image">
                        <img className="img-circle elevation-2" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:100}}/>
                      </div>
                        </div>
                        <div className="col-9">
                          sdfsdf
                        </div>
                      </div>
                    
                    </div>
                    <div className="align-self-center">
                      {/* <h3>ระบบจองห้องประชุม</h3> */}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <div className="col-xl-6 col-md-12">
            <div className="card bg-secondary">
              <div className="card-header">
              <h4><i class="far fa-edit"></i> ระบบบริหารจัดการความเสี่ยง</h4>
              </div>
              <div className="card-content">
                <div className="card-body cleartfix">
                  <div className="media align-items-stretch">
                    <div className="align-self-center">
                      <i className="icon-speech warning font-large-2 mr-2" />
                    </div>
                    <div className="media-body">
                      <div className="row">
                        <div className="col-3">
                        <div className="widget-user-image">
                        <img className="img-circle elevation-2" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:100}}/>
                      </div>
                        </div>
                        <div className="col-9">
                          sdfsdf
                        </div>
                      </div>
                    
                    </div>
                    <div className="align-self-center">
                      {/* <h3>ระบบจองห้องประชุม</h3> */}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div className="col-xl-6 col-md-12">
            <div className="card bg-secondary">
              <div className="card-header">
              <h4><i class="far fa-edit"></i> ระบบบริหารงานบุคคล</h4>
              </div>
              <div className="card-content">
                <div className="card-body cleartfix">
                  <div className="media align-items-stretch">
                    <div className="align-self-center">
                      <i className="icon-speech warning font-large-2 mr-2" />
                    </div>
                    <div className="media-body">
                      <div className="row">
                        <div className="col-3">
                        <div className="widget-user-image">
                        <img className="img-circle elevation-2" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg" alt="User Avatar" style={{ width:100}}/>
                      </div>
                        </div>
                        <div className="col-9">
                          sdfsdf
                        </div>
                      </div>
                    
                    </div>
                    <div className="align-self-center">
                      {/* <h3>ระบบจองห้องประชุม</h3> */}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>


      </div>
    </div>


  )
}



Home.Layout = Theme;