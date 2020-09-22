import React, { useState, useEffect } from 'react'
import * as rdd from 'react-device-detect';
import { useSelector, useDispatch } from 'react-redux'

import axios from 'axios'
import { api } from '../service/config'
// import Pagination from '../components/pagination'
import ReactPaginate from 'react-paginate';


function Home() {

  const pageLimit = 10;
  const [offset, setOffset] = useState(0);
  const [currentPage, setCurrentPage] = useState(1);
  const [data, setData] = useState([]);
  const [currentData, setCurrentData] = useState([]);
  const data = [page1, page2, page3, page4, page5, page6];



  const [customer, setCustomer] = useState();
  const [posts, setPosts] = useState([]);
  const isAuthUser = useSelector(state => state.auth);



  const getCustomer = async () => {
    try {
      let res = await axios.get(api.url + 'customers');
      let { data } = res.data;
      setCustomer(res.data);
    } catch (error) {
      console.log(error) //{config:{...}}
    }
  };
  const getNumber = async () => {
    try {
      let res = await axios.get(api.url + 'numbers');
      let { data } = res.data;
      setCustomer(res.data);
    } catch (error) {
      console.log(error) //{config:{...}}
    }
  };

  const getPost = async () => {
    let res = axios.get('https://jsonplaceholder.typicode.com/posts');
    let a = (await res).data
    console.log(a)
    setPosts(a)
  }

  const handlePageClick = (data) => {
    const selectedPage = data.selected;
    const offset = selectedPage * this.state.perPage;
    this.setState({ currentPage: selectedPage, offset: offset }, () => {
      this.setElementsForCurrentPage();
    });
  }

  useEffect(() => {
    fetchData().then(data => setData(data));
    let res = axios.get('https://jsonplaceholder.typicode.com/posts');
    setData(res.data);
  }, []);
 
  useEffect(() => {
    setCurrentData(data.slice(offset, offset + pageLimit));
  }, [offset, data]);
 


  // useEffect(() => {
  //   setPosts();
  // }, []);
  return (
    <div>
      <h5>
        Device :
            {/* {JSON.stringify(rdd, null, 5)} */}
        {/* {JSON.stringify(posts)} */}
      </h5>
      <button type="button" class="btn btn-primary" onClick={getCustomer}>load</button>
      <button type="button" class="btn btn-primary" onClick={getNumber}>get Number</button>
      <button className="btn btn-primary" onClick={() => setCustomer(1)}>Click + </button>{' '}
      <button className="btn btn-primary" onClick={getPost}>Load Post </button>{' '}


      <div className="row mt-5">
        <div className="col-12">
          <div className="card">
            <div className="card-header">
              <h3 className="card-title">Fixed Header Table</h3>
              <div className="card-tools">
                <div className="input-group input-group-sm" style={{ width: 150 }}>
                  <input type="text" name="table_search" className="form-control float-right" placeholder="Search" />
                  <div className="input-group-append">
                    <button type="submit" className="btn btn-default"><i className="fas fa-search" /></button>
                  </div>
                </div>
              </div>
            </div>
            {/* /.card-header */}
            <div className="card-body table-responsive p-0" style={{ height: 400 }}>
              <table className="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                </thead>
                <tbody>

                  {posts.map((item, index) => (
                    <tr key={index}>
                      <td>{index+1}</td>
                      <td>{item.title}</td>
                      <td>11-7-2014</td>
                      <td><span className="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
            {/* /.card-body */}
          </div>
          {/* /.card */}
        </div>
      </div>

      <ReactPaginate
      previousLabel={'previous'}
      nextLabel={'next'}
      breakLabel={'...'}
      breakClassName={'break-me'}
      pageCount={10}
      marginPagesDisplayed={2}
      pageRangeDisplayed={5}
      onPageChange={handlePageClick}
      containerClassName={'pagination'}
      subContainerClassName={'pages pagination'}
      activeClassName={'active'}
    />




    </div>
  )
}



export default Home

