import React from "react";
import { useForm, Controller } from "react-hook-form";
import { inputField, SelectField, SwitchField } from "../Inputs";
import { Button, Card } from "antd";
import Axios from '../../axios.config'

export default function ListItems({ setCategory, items }) {
    const { handleSubmit, control, errors, reset } = useForm();
    const type = ["Student", "Developer", "other"];

    const onSubmit = async (data) => {
        // console.log(data)
        setTimeout(() => reset({
            FirstName: '',
            LastName: '',
            Email: '',
        }), 1000);
        
        let res = await Axios.post('category', data);
        reset({ name: '', type: '' })
        setCategory([...items, res.data.item]);

    };
    return (

        <form onSubmit={handleSubmit(onSubmit)}>
            <div className="row">
                <div className="col-6">

                    <div className='input-group'>
                        <label className='label'>ชื่อแผนก/หน่วยงาน</label>
                        <Controller
                            as={inputField("name")}
                            name='name'
                            control={control}
                            defaultValue=''
                            rules={{ required: true }}
                        />
                        <Controller
                            as={inputField("type")}
                            name='type'
                            control={control}
                            defaultValue='department'
                            rules={{ required: true }}
                            hidden="true"
                        />
                        {errors.FirstName && (
                            <span className='error'>This field is required</span>
                        )}
                    </div>
                </div>
                <div className="col-6">
                    <br />
                    <div style={{ metginTop: '25px' }}>
                        <Button type='primary' htmlType='submit' >
                            Register
			</Button>
                    </div>
                </div>
            </div>
        </form>

    );
}
