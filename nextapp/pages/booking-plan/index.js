import React from 'react'

import Theme from "../../layouts/bootstrap4/theme1";

// import FullCalendar from '../../components/fullcalendar'
export default function Index() {
    return (
        <div>



<div className="alert alert-info" role="alert">
  <h4 className="alert-heading"><i class="fas fa-share-alt"></i> ประชาสัมพันธ์</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr />
  <p className="mb-0">โพสเมื่อ 17/10/2553</p>
</div>


<table className="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colSpan={2}>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<section className="content">
  <div className="container-fluid">
    <div className="row">
      <div className="col-md-3">
        <div className="sticky-top mb-3">
          <div className="card">
            <div className="card-header">
              <h4 className="card-title">Draggable Events</h4>
            </div>
            <div className="card-body">
              {/* the events */}
              <div id="external-events">
                <div className="external-event bg-success ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Lunch</div>
                <div className="external-event bg-warning ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Go home</div>
                <div className="external-event bg-info ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Do homework</div>
                <div className="external-event bg-primary ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Work on UI design</div>
                <div className="external-event bg-danger ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Sleep tight</div>
                <div className="checkbox">
                  <label htmlFor="drop-remove">
                    <input type="checkbox" id="drop-remove" />
                    remove after drop
                  </label>
                </div>
              </div>
            </div>
            {/* /.card-body */}
          </div>
          {/* /.card */}
          <div className="card">
            <div className="card-header">
              <h3 className="card-title">Create Event</h3>
            </div>
            <div className="card-body">
              <div className="btn-group" style={{width: '100%', marginBottom: 10}}>
                {/*<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>*/}
                <ul className="fc-color-picker" id="color-chooser">
                  <li><a className="text-primary" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-warning" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-success" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-danger" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-muted" href="#"><i className="fas fa-square" /></a></li>
                </ul>
              </div>
              {/* /btn-group */}
              <div className="input-group">
                <input id="new-event" type="text" className="form-control" placeholder="Event Title" />
                <div className="input-group-append">
                  <button id="add-new-event" type="button" className="btn btn-primary">Add</button>
                </div>
                {/* /btn-group */}
              </div>
              {/* /input-group */}
            </div>
          </div>
        </div>
      </div>
      {/* /.col */}
      <div className="col-md-9">
        <div className="card card-primary">
          <div className="card-body p-0">
         FullCalendar
{/* 
         <FullCalendar defaultView='dayGridMonth' />
      <FullCalendar defaultView='timeGridWeek' /> */}

          {/* /.card-body */}
        </div>
        </div>
        {/* /.card */}
      </div>
      {/* /.col */}
    </div>
    {/* /.row */}
  </div>{/* /.container-fluid */}
</section>



        </div>
    )
}
Index.Layout = Theme;