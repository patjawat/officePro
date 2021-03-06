import React from 'react'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
export default function JobList() {

  const store = useSelector(state => state);
  const user = store.user ? store.user.profile : null;
  
  const dispatch = useDispatch();
  const router = useRouter()

    return (
        <div>
            <div className="card">
  <div className="card-header p-2">
    <ul className="nav nav-pills">
      <li className="nav-item"><a className="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
      <li className="nav-item"><a className="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
      <li className="nav-item"><a className="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
  </div>{/* /.card-header */}
  <div className="card-body">
    <div className="tab-content">
      <div className="tab-pane active" id="activity">
        {/* Post */}
        <div className="post">

          <input className="form-control form-control-sm" type="text" placeholder="Type a comment" />
        </div>

        {/* Post */}
        <div className="post">
          <div className="user-block">
            <img className="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image" />
            <span className="username">
              <a href="#">Adam Jones</a>
              <a href="#" className="float-right btn-tool"><i className="fas fa-times" /></a>
            </span>
            <span className="description">Posted 5 photos - 5 days ago</span>
          </div>
          {/* /.user-block */}
          <div className="row mb-3">
            <div className="col-sm-6">
              <img className="img-fluid" src="../../dist/img/photo1.png" alt="Photo" />
            </div>
            {/* /.col */}
            <div className="col-sm-6">
              <div className="row">
                <div className="col-sm-6">
                  <img className="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo" />
                  <img className="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo" />
                </div>
                {/* /.col */}
                <div className="col-sm-6">
                  <img className="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo" />
                  <img className="img-fluid" src="../../dist/img/photo1.png" alt="Photo" />
                </div>
                {/* /.col */}
              </div>
              {/* /.row */}
            </div>
            {/* /.col */}
          </div>
          {/* /.row */}
          <p>
            <a href="#" className="link-black text-sm mr-2"><i className="fas fa-share mr-1" /> Share</a>
            <a href="#" className="link-black text-sm"><i className="far fa-thumbs-up mr-1" /> Like</a>
            <span className="float-right">
              <a href="#" className="link-black text-sm">
                <i className="far fa-comments mr-1" /> Comments (5)
              </a>
            </span>
          </p>
          <input className="form-control form-control-sm" type="text" placeholder="Type a comment" />
        </div>
        {/* /.post */}
      </div>
      {/* /.tab-pane */}
      <div className="tab-pane" id="timeline">
        {/* The timeline */}
        <div className="timeline timeline-inverse">
          {/* timeline time label */}
          <div className="time-label">
            <span className="bg-danger">
              10 Feb. 2014
            </span>
          </div>
          {/* /.timeline-label */}
          {/* timeline item */}
          <div>
            <i className="fas fa-envelope bg-primary" />
            <div className="timeline-item">
              <span className="time"><i className="far fa-clock" /> 12:05</span>
              <h3 className="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
              <div className="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
              </div>
              <div className="timeline-footer">
                <a href="#" className="btn btn-primary btn-sm">Read more</a>
                <a href="#" className="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>
          {/* END timeline item */}
          {/* timeline item */}
          <div>
            <i className="fas fa-user bg-info" />
            <div className="timeline-item">
              <span className="time"><i className="far fa-clock" /> 5 mins ago</span>
              <h3 className="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
              </h3>
            </div>
          </div>
          {/* END timeline item */}
          {/* timeline item */}
          <div>
            <i className="fas fa-comments bg-warning" />
            <div className="timeline-item">
              <span className="time"><i className="far fa-clock" /> 27 mins ago</span>
              <h3 className="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
              <div className="timeline-body">
                Take me to your leader!
                Switzerland is small and neutral!
                We are more like Germany, ambitious and misunderstood!
              </div>
              <div className="timeline-footer">
                <a href="#" className="btn btn-warning btn-flat btn-sm">View comment</a>
              </div>
            </div>
          </div>
          {/* END timeline item */}
          {/* timeline time label */}
          <div className="time-label">
            <span className="bg-success">
              3 Jan. 2014
            </span>
          </div>
          {/* /.timeline-label */}
          {/* timeline item */}
          <div>
            <i className="fas fa-camera bg-purple" />
            <div className="timeline-item">
              <span className="time"><i className="far fa-clock" /> 2 days ago</span>
              <h3 className="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
              <div className="timeline-body">
                <img src="http://placehold.it/150x100" alt="..." />
                <img src="http://placehold.it/150x100" alt="..." />
                <img src="http://placehold.it/150x100" alt="..." />
                <img src="http://placehold.it/150x100" alt="..." />
              </div>
            </div>
          </div>
          {/* END timeline item */}
          <div>
            <i className="far fa-clock bg-gray" />
          </div>
        </div>
      </div>
      {/* /.tab-pane */}
      <div className="tab-pane" id="settings">
        <form className="form-horizontal">
          <div className="form-group row">
            <label htmlFor="inputName" className="col-sm-2 col-form-label">Name</label>
            <div className="col-sm-10">
              <input type="email" className="form-control" id="inputName" value={user ? user.name : null} placeholder="Name" />
            </div>
          </div>
          <div className="form-group row">
            <label htmlFor="inputEmail" className="col-sm-2 col-form-label">Email</label>
            <div className="col-sm-10">
              <input type="email" className="form-control" value={user ? user.email : null} id="inputEmail" placeholder="Email" />
            </div>
          </div>
          <div className="form-group row">
            <label htmlFor="inputName2" className="col-sm-2 col-form-label">Name</label>
            <div className="col-sm-10">
              <input type="text" className="form-control" id="inputName2" placeholder="Name" />
            </div>
          </div>
          <div className="form-group row">
            <label htmlFor="inputExperience" className="col-sm-2 col-form-label">Experience</label>
            <div className="col-sm-10">
              <textarea className="form-control" id="inputExperience" placeholder="Experience" defaultValue={""} />
            </div>
          </div>
          <div className="form-group row">
            <label htmlFor="inputSkills" className="col-sm-2 col-form-label">Skills</label>
            <div className="col-sm-10">
              <input type="text" className="form-control" id="inputSkills" placeholder="Skills" />
            </div>
          </div>
          <div className="form-group row">
            <div className="offset-sm-2 col-sm-10">
              <div className="checkbox">
                <label>
                  <input type="checkbox" /> I agree to the <a href="#">terms and conditions</a>
                </label>
              </div>
            </div>
          </div>
          <div className="form-group row">
            <div className="offset-sm-2 col-sm-10">
              <button type="submit" className="btn btn-danger">Submit</button>
            </div>
          </div>
        </form>
      </div>
      {/* /.tab-pane */}
    </div>
    {/* /.tab-content */}
  </div>{/* /.card-body */}
</div>

        </div>
    )
}
