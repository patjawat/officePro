import React,{useState} from 'react'
import { useForm } from "react-hook-form";
import { Form, Input, Button, Radio } from 'antd';

export default function FormCategory({type}) {
    const { register, handleSubmit, watch, errors } = useForm();
    const [form] = Form.useForm();
    const [formLayout, setFormLayout] = useState('horizontal');
    
    const onSubmit = data => {
        console.log(data);
    }
  
    console.log(watch("example")); // watch input value by passing the name of it

    
    return (
        <form onSubmit={handleSubmit(onSubmit)}>
    <label>แผนก/หน่วยงาน</label>
      <Input name="name" className="form-control" defaultValue="test" ref={register} placeholder="Basic usage" />
      {errors.exampleRequired && <span>This field is required</span>}
      <Button type="primary">บันทึก</Button>
    </form>
    )
}
